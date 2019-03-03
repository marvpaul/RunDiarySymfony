<?php
/**
 * Created by IntelliJ IDEA.
 * User: marvinkruger
 * Date: 03.01.18
 * Time: 17:09
 */

namespace App\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Entry;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Translation\TranslatorInterface;


class SearchController extends AbstractController
{
    /**
     * This controller search for a certain user, given a username including in the submitted form.
     * In case a user exists, this controller will create a redirect to the users profile,
     * otherwise the controller will create a redirect to index page
     * @Route("/search_user/", name="search_user")
     * @param EntityManagerInterface $em
     * @param Request $request
     * @param TranslatorInterface $translator
     * @return Response
     */
    public function search(EntityManagerInterface $em, Request $request, TranslatorInterface $translator)
    {
        $name = $request->request->get("form")["name"];

        $user = $em
            ->getRepository(User::class)
            ->findOneBy(['name' => $name]);
        if (!$user) {
            $this->addFlash(
                'notice',
                $translator->trans('User not found!')
            );
            return $this->redirectToRoute('index');
        } else {
            return $this->redirectToRoute('profile', array('username' => $name));
        }

    }
}