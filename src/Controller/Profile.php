<?php
namespace App\Controller;
use App\Entity\Entry;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use App\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;

class Profile extends Controller {
    /**
     * @Route("/profile/{username}")
     * @return Response
     */
    public function profile(Request $request, ObjectManager $manager, UserInterface $loggedin_user = null, $username) {

        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->findOneBy(['name' => $username]);

        //Ooops, user does not exists :/
        if (!$user) {
            return $this->render('not_found.twig', array(
               'message' => 'User ' . $username . ' not found'
            ));
        }

        //Get all user entries
        $entries = $this->getDoctrine()
            ->getRepository(Entry::class)
            ->findBy(['user_id' => $user->getId()]);

        $user_entries = null;
        foreach($entries as $entry){
            //Get owner of the entry
            $entry_owner = $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy(['id' => $entry->getUserId()]);
            if($entry_owner->getName() == $username ){
                $user_entries[] = $entry;
            }
        }

        $user->entries = $user_entries;
        $user->days_trained = 0;
        $user->entire_time = 0;
        $user->entire_distance = 0;

        $form = $this->createFormBuilder()
            ->setMethod('GET')
            ->add('Time', TimeType::class)
            ->add('Date', DateType::class)
            ->add('Distance', IntegerType::class)
            ->add('Save', SubmitType::class, array('label' => 'Create entry'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $distance = $form["Distance"]->getData();
            $date = $form["Date"]->getData();
            $time = $form["Time"]->getData();

            $entry = new Entry();
            $entry->setDate($date);
            $entry->setDistance($distance);
            $entry->setTime($time);
            $entry->setUserId($loggedin_user->getId());


            $validator = $this->get('validator');
            $errors = $validator->validate($entry);

            if (count($errors) > 0) {
                /*
                 * Uses a __toString method on the $errors variable which is a
                 * ConstraintViolationList object. This gives us a nice string
                 * for debugging.
                 */
                $errorsString = (string) $errors;

                return new Response($errorsString);
            }

            $entry->setAvgSpeed(0);
            $manager->persist($entry);
            $manager->flush();
        }

        return $this->render('user.twig', array(
            'user' => $user,
            'form' => $form->createView()
        ));



    }
}