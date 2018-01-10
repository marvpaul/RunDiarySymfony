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
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use App\Entity\User;
class LanguageChanger extends Controller {
    /**
     * @Route("/language/{language}", name="language")
     */
    public function changeLanguage(SessionInterface $session, $language){
        $session->set('_locale', $language);
        return $this->redirect('/public/index.php');
}
}