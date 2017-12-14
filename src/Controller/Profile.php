<?php
namespace App\Controller;
use App\Entity\Entry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use App\Entity\User;
class Profile extends Controller {
    /**
     * @Route("/profile/{username}")
     * @return Response
     */
    public function profile($username) {

        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->findOneBy(['name' => $username]);

        if (!$user) {
            return $this->render('not_found.twig', array(
               'message' => 'User ' . $username . ' not found'
            ));
        }

        $entries = $this->getDoctrine()
            ->getRepository(Entry::class)
            ->findBy(['user_id' => $user->getId()]);

        $user->entries = $entries;
        $user->days_trained = 0;
        $user->entire_time = 0;
        $user->entire_distance = 0;
        return $this->render('user.twig', array(
            'user' => $user
        ));

    }
}