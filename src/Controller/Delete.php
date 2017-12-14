<?php
namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class Delete extends Controller {
    /**
     * @Route("/delete/{date}")
     * @param $date a date to delete
     * @return Response
     */
    public function delete($date) {

        //Load json from data.json and decode to assoc array
        $json_data = file_get_contents('data.json');
        $json_data = json_decode($json_data, true);

        //Check if there is any entry
        if(!$json_data == null){
            //Replace old entry?
            $lenArr = count($json_data);
            unset($json_data[$date]);
            if($lenArr != count($json_data)){
                file_put_contents("data.json", json_encode($json_data));
                //echo 'true';
            } else{
              //  echo 'false';
            }
        } else {
            //echo 'false';
            //TODO: Add flashes?
        }
        // redirect to a route with parameters
        return $this->redirectToRoute('index');

    }
}