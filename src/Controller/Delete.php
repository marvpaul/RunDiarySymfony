<?php
namespace App\Controller;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Entry;
use Symfony\Component\Security\Core\User\UserInterface;

class Delete extends Controller {
    /**
     * @Route("/delete/{entryid}/{userid}")
     * @param $date a date to delete
     * @return Response
     */
    public function delete($entryid, $userid, ObjectManager $manager, UserInterface $loggedin_user = null) {
        if($loggedin_user->getId() == $userid){
            $entry = $manager
                ->getRepository(Entry::class)
                ->findOneBy(['id' => $entryid, 'user_id' => $userid]);
            $manager->remove($entry);
            $manager->flush();
        }

        //Redirect back to profile
        return $this->redirect('/public/profile/'. $loggedin_user->getName());

    }
}