<?php
namespace App\Controller;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Entry;
use Symfony\Component\Security\Core\User\UserInterface;

class Search extends Controller {
    /**
     * @Route("/search/{query}")
     *
     * @param $date a date to delete
     * @return Response
     */
    public function search(EntityManagerInterface $em, $query) {

        //Check for special chars
        if(preg_match("/^[a-zA-Z0-9]+$/", $query) != 1 || strlen($query) < 3) {
            return new Response('[]');
        }

        //Get the current user object
        $qb = $em->createQueryBuilder();

        $em = $qb->getEntityManager();

        $users = $em->getRepository(User::class)->createQueryBuilder('u')
            ->where('u.name LIKE :userquery')
            ->setParameter('userquery', $query . '%')
            ->getQuery()
            ->getResult();

        $names = [];


        for($i = 0; $i < count($users) && $i < 10; $i++){
            $names[] = $users[$i]->getName();
        }

        //Redirect back to profile
        return new Response(json_encode($names));

    }

    /**
     * @Route("/search/")
     *
     * @param $date a date to delete
     * @return Response
     */
    public function searchForAutocompl(EntityManagerInterface $em, Request $request) {
        $query = $request->get("term");

        //Check for special chars
        if(preg_match("/^[a-zA-Z0-9]+$/", $query) != 1 || strlen($query) < 3) {
            return new Response('[]');
        }

        //Get the current user object
        $qb = $em->createQueryBuilder();

        $em = $qb->getEntityManager();

        $users = $em->getRepository(User::class)->createQueryBuilder('u')
            ->where('u.name LIKE :userquery')
            ->setParameter('userquery', $query . '%')
            ->getQuery()
            ->getResult();

        $names = [];


        for($i = 0; $i < count($users) && $i < 10; $i++){
            $names[] = $users[$i]->getName();
        }

        //Redirect back to profile
        return new Response(json_encode($names));

    }
}