<?php
namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use \Symfony\Component\Form\Extension\Core\Type\TimeType;
use \Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller {





    /**
     * @Route("/")
     * @return Response
     */
    public function index(Request $request) {

        $json_data = file_get_contents('data.json');
        $json_data = json_decode($json_data, true);

        reset($json_data);
        $start_date = strtotime(key($json_data));
        end($json_data);
        $end_date = strtotime(key($json_data));
        $days_between = floor(abs($start_date - $end_date) / 86400);

        $form = $this->createFormBuilder()
            ->setMethod('GET')
            ->add('Time', TimeType::class)
            ->add('Date', DateType::class)
            ->add('Distance', IntegerType::class)
            ->add('Save', SubmitType::class, array('label' => 'Create entry'))
            ->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $distance = $form["Distance"]->getData();
            $date = $form["Date"]->getData()->format('Y-m-d');
            $time = $form["Time"]->getData()->format('i');

            //Load json from data.json and decode to assoc array
            $json_data = file_get_contents('data.json');
            $json_data = json_decode($json_data, true);
            $entry = array(
                "time" =>  $time,
                "distance" => $distance,
                "avgSpeed" => "10"
            );
            $entry_with_date = array(
                $date => $entry
            );

            //Check if there is any other entry
            if($json_data == null){
                file_put_contents("data.json", json_encode($entry_with_date));
            } else{
                $setted = false;
                //Replace old entry?
                foreach ($json_data as $key => $act_entry){
                    if($date == strtotime($key)){
                        $json_data[$key] = $entry;
                        $setted = true;
                        break;
                    }
                }
                //Set new entry instead of replacing one
                if(!$setted){
                    $json_data[$date] = $entry;
                    uksort($json_data, function ( $a, $b ) {
                        return strtotime($a) - strtotime($b);
                    });
                }
                file_put_contents("data.json", json_encode($json_data));
            }
        }

        return $this->render('index.html.twig', array(
            'diary' => $json_data,
            'entireDays' => count($json_data),
            'daysBetweenEndAndBeginning' => $days_between,
            'form' => $form->createView()
        ));
    }
}
