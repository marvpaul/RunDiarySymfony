<?php
namespace App\Controller;
use App\Entity\Entry;
use App\Entity\User;
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
        $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();
        $entries = $this->getDoctrine()
            ->getRepository(Entry::class)
            ->findAll();

        $entriesPerUser = null;
        foreach ($users as $user){
            $user->days_trained = 0;
            $user->entire_distance = 0;
        }
        foreach($entries as $entry){
            //Get owner of the entry
            $entry_owner = $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy(['id' => $entry->getUserId()]);
            foreach($users as $user){
                if($entry_owner->getName() == $user->getName() ){
                    $user->user_entries[] = $entry;
                    $user->entire_distance += $entry->getDistance();
                    $user->days_trained += 1;
                }
            }

        }



        return $this->render('overview.twig', array(
            'users' => $users
        ));
        /*
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
        }*/


    }
}
