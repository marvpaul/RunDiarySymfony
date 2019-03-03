<?php

namespace App\Controller;

use App\Entity\Entry;
use App\Service\EntryService;
use App\Service\UserStatisticsGenerator;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use App\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Translation\TranslatorInterface;

class Profile extends AbstractController
{
    /**
     * Route for showing a certain profile which is specified by username param.
     * Note: In case you're not logged in, you can only see some features of the run diary. Log in to
     * gain full access to the diary entries.
     * @Route("/profile/{username}", name="profile")
     * @param Request $request
     * @param string $username
     * @param EntryService $entryService
     * @param UserStatisticsGenerator $userStatisticsGenerator
     * @param TranslatorInterface $translator
     * @param UserInterface|null $loggedin_user
     * @return Response
     */
    public function profile(
        Request $request,
        string $username,
        EntryService $entryService,
        UserStatisticsGenerator $userStatisticsGenerator,
        TranslatorInterface $translator,
        UserInterface $loggedin_user = null
    ) {
        //Get the current userWithStatistics object and enrich with stats
        $userWithStatistics = $userStatisticsGenerator->getStatisticsUser($username);

        // Requested userWithStatistics does not exists
        if (!$userWithStatistics) {
            return $this->render('not_found.twig', array(
                'message' => 'User ' . $username . ' not found'
            ));
        }

        //Create a formular and handle a possible request
        $form = $this->createEntryForm($translator);
        $form->handleRequest($request);

        //In case form was submitted, validate the values and save to DB in case the form is valid
        if ($form->isSubmitted()) {
            // Retrieve entry data from form
            $entry = $entryService->parseEntryFromForm($form, $loggedin_user->getId());

            // Check for errors
            $validator = $this->get('validator');
            $errors = $validator->validate($entry);
            if (count($errors) > 0) {
                //Render user template with errors
                return $this->render('user.twig', array(
                    'user' => $userWithStatistics,
                    'form' => $form->createView(),
                    'errors' => $errors
                ));
            }

            // This statement is only reached in case the entry was validated successfully
            $entryService->addEntry($entry);

            $this->addFlash(
                'notice',
                $translator->trans('Entry created!')
            );
        }


        # Reload the entries cause one could be added via form
        $userWithStatistics = $userStatisticsGenerator->getStatisticsUser($username);
        return $this->render('user.twig', array(
            'user' => $userWithStatistics,
            'form' => $form->createView(),
            'errors' => []
        ));
    }

    /**
     * Creates a form for an run entry
     * @param TranslatorInterface $translator
     * @return \Symfony\Component\Form\FormInterface the created form
     */
    private function createEntryForm(TranslatorInterface $translator)
    {
        return $this->createFormBuilder()
            ->setMethod('GET')
            ->add($translator->trans('Time'), TimeType::class)
            ->add($translator->trans('Date'), DateType::class)
            ->add($translator->trans('Distance'), IntegerType::class)
            ->add($translator->trans('Save'), SubmitType::class, array('label' => 'Create entry'))
            ->getForm();
    }

    /**
     * Route for getting the user data in several formats.
     * @Route("/profile/{username}/diary.{_format}", defaults={"_format"="html"})
     * @param Request $request
     * @param string $username
     * @param UserStatisticsGenerator $userStatisticsGenerator
     * @param UserInterface|null $loggedin_user
     * @return Response
     */
    public function showUser(
        Request $request,
        string $username,
        UserStatisticsGenerator $userStatisticsGenerator,
        UserInterface $loggedin_user = null
    ) {
        $format = $request->getRequestFormat();

        // You have to be logged in to use this service
        if ($loggedin_user != null) {
            //Get the current user object with statistics
            $userWithStatistics = $userStatisticsGenerator->getStatisticsUser($username);
            switch ($format) {
                case "json":
                    return $this->generateJsonFromUser($userWithStatistics);
                case "csv":
                    return $this->generateCsvFromUser($userWithStatistics);
                default:
                    return $this->redirectToRoute('index');
            }
        } else {
            return $this->redirectToRoute('login');
        }
    }

    /**
     * Generates csv file from given user with statistics and return a response object which includes this file
     * @param $userWithStatistics the requested user enriched with statistics
     * @return Response response object including csv file attachment with user data
     */
    private function generateCsvFromUser($userWithStatistics)
    {
        $fileContent = $this->render('diary.csv.twig', array(
            'user' => $userWithStatistics
        ))->getContent(); // the generated file content
        $response = new Response($fileContent);

        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $userWithStatistics->getName() . '.csv'
        );

        $response->headers->set('Content-Disposition', $disposition);
        return $response;
    }

    /**
     * Generates json file from given user with statistics and return a response object which includes this file
     * @param $userWithStatistics the requested user enriched with statistics
     * @return Response response object including json file attachment with user data
     */
    private function generateJsonFromUser($userWithStatistics)
    {
        $response = new Response();
        $response->setContent($this->render('diary.json.twig', array(
            'user' => $userWithStatistics
        ))->getContent());
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}