<?php
namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
class DefaultController extends Controller {
    /**
     * @Route("/")
     * @Template("index.html.twig")
     */
    public function index() {
    }
}
