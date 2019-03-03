<?php

namespace App\Controller;

use App\Entity\Entry;
use App\Entity\User;
use App\Service\UserStatisticsGenerator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use \Symfony\Component\Form\Extension\Core\Type\TimeType;
use \Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\DateTime;
use App\Form\Type\UserSearchType;
use Symfony\Component\Translation\TranslatorInterface;

class DefaultController extends AbstractController
{


    /**
     * This is the default route where you can see statistics about each user and a searchbar
     * @Route("/")
     * @param Request $request
     * @param TranslatorInterface $translator
     * @param UserStatisticsGenerator $userStatisticsGenerator
     * @return Response
     */
    public function index(
        Request $request,
        TranslatorInterface $translator,
        UserStatisticsGenerator $userStatisticsGenerator
    ) {
        //Get all users
        $usersWithStatistics = $userStatisticsGenerator->getStatisticsForAllUsers();

        //Create a formular
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('search_user'))
            ->setMethod('POST')
            ->add('name', TextType::class)
            ->add('Save', SubmitType::class, array('label' => $translator->trans("Search!")))
            ->getForm();

        $form->handleRequest($request);

        return $this->render('overview.twig', array(
            'usersWithStatistics' => $usersWithStatistics,
            'form' => $form->createView()
        ));
    }
}
