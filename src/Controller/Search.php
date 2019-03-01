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

class Search extends Controller
{

    /**
     * Tries to determine profile names which includes a given query.
     * The query should be provided in form data with key: term
     * @Route("/search/")
     * @return Response a list of max. 10 usernames which includes a given query.
     */
    public function searchForAutocompl(EntityManagerInterface $em, Request $request)
    {
        $query = $request->get("term");

        //Only proceed in case no special characters are given and string length in greater 3
        if (preg_match("/^[a-zA-Z0-9]+$/", $query) != 1 || strlen($query) < 3) {
            return new Response('[]');
        }

        $users = $em->getRepository(User::class)->createQueryBuilder('u')
            ->where('u.name LIKE :userquery')
            ->setParameter('userquery', $query . '%')
            ->getQuery()
            ->getResult();

        // Get 10 names which contain the requested query
        $names = array_map(function ($user) {
            return $user->getName();
        }, $users);
        $names = array_slice($names, 0, 10);

        //Redirect back to profile
        return new Response(json_encode($names));

    }
}