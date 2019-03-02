<?php
/**
 * Created by IntelliJ IDEA.
 * User: marvinkruger
 * Date: 10.01.18
 * Time: 16:08
 */

namespace App\Controller;

use App\Entity\Entry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use App\Entity\User;
use Symfony\Component\Translation\Loader\XliffFileLoader;
use Symfony\Component\Translation\Translator;

class LanguageChanger extends Controller
{
    /**
     * Route to change language. You can at the moment choose between english and german by using either de_DE or en_US
     * @Route("/language/{language}", name="language")
     * @param SessionInterface $session
     * @param string $language the language which was selected by the user. Possible values are en_US or de_DE
     * @return \Symfony\Component\HttpFoundation\RedirectResponse redirect to index page
     */
    public function changeLanguage(SessionInterface $session, string $language)
    {
        $session->set('_locale', $language);

        return $this->redirectToRoute('index');
    }
}