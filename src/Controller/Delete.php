<?php
namespace App\Controller;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Entry;
use Symfony\Component\Security\Core\User\UserInterface;

class Delete extends Controller {
    /**
     * @Route("/delete/{entryid}/{userid}")
     * @param $date a date to delete
     * @return Response
     */
    public function delete($entryid, $userid, ObjectManager $manager, UserInterface $loggedin_user = null) {

        //The user which wanna to delete an entry is logged in as same user
        if($loggedin_user->getId() == $userid){
            $entry = $manager
                ->getRepository(Entry::class)
                ->findOneBy(['id' => $entryid, 'user_id' => $userid]);
            $manager->remove($entry);
            $manager->flush();
        }

        //Redirect back to profile
        return $this->redirect('/public/index.php/profile/'. $loggedin_user->getName());

    }
}