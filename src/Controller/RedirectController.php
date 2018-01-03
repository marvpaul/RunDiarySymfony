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
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Entry;
use Symfony\Component\Security\Core\User\UserInterface;


class RedirectController extends Controller {
    /**
     * @Route("/go/", name="go")
     * @return Response
     */
    public function search(EntityManagerInterface $em, Request $request) {
        $name = $request->request->get("form")["user"];

        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->findOneBy(['name' => $name]);
        if (!$user) {
            throw $this->createNotFoundException("User does not exists");
        } else{
            return $this->redirect('/public/index.php/profile/'. $name);
        }

    }
}