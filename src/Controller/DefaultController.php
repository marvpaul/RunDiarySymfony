<?php
namespace App\Controller;
use App\Entity\Entry;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
    }
}
