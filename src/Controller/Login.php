<?php

namespace App\Controller;

use App\Entity\Entry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use App\Entity\User;
use Symfony\Component\Translation\TranslatorInterface;

class Login extends Controller
{
    /**
     * Route to login into the run diary.
     * @Route("/login", name="login")
     * @param AuthenticationUtils $authUtils
     * @param TranslatorInterface $translator
     * @return Response renders the login template
     */
    public function login(AuthenticationUtils $authUtils, TranslatorInterface $translator)
    {

        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        if (!is_null($error)) {
            $this->addFlash(
                'notice',
                $translator->trans('No valid credentials!')
            );
        }

        // render login template using the latest username entered by the user as input value
        return $this->render('login.twig', array(
            'last_username' => $authUtils->getLastUsername()
        ));
    }

    /**
     * @Route("/after_login", name="after_login")
     * @param UserInterface|null $loggedin_user
     * @return \Symfony\Component\HttpFoundation\RedirectResponse redirect either to the profile of a
     * logged in user or to index page
     */
    public function after_login(UserInterface $loggedin_user = null)
    {
        if (is_null($loggedin_user)) {
            return $this->redirectToRoute('index');
        } else {
            return $this->redirectToRoute('profile', array('username' => $loggedin_user->getName()));
        }
    }
}