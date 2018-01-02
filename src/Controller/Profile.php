<?php
namespace App\Controller;
use App\Entity\Entry;
use DateTime;
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

        //Get the current user object
        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->findOneBy(['name' => $username]);

        //Create a formular
        $form = $this->createFormBuilder()
            ->setMethod('GET')
            ->add('Time', TimeType::class)
            ->add('Date', DateType::class)
            ->add('Distance', IntegerType::class)
            ->add('Save', SubmitType::class, array('label' => 'Create entry'))
            ->getForm();

        $form->handleRequest($request);

        //In case form was submitted, validate the values and save to DB in case the form is valid
        if ($form->isSubmitted()) {
            $distance = $form["Distance"]->getData();
            $date = $form["Date"]->getData();
            $time = $form['Time']->getData();

            $entry = new Entry();
            $entry->setDate($date);
            $entry->setDistance($distance);
            $entry->setTime($time);
            $entry->setUserId($loggedin_user->getId());


            $validator = $this->get('validator');
            $errors = $validator->validate($entry);

            if (count($errors) > 0) {
                //String with all error included in
                $errorsString = (string) $errors;

                $user = $this->getEntries($user, $username);

                //Render user template with errors
                return $this->render('user.twig', array(
                    'user' => $user,
                    'form' => $form->createView(),
                    'errors' => $errors
                ));
            }

            //Parse hours
            $hours = (float)$form["Time"]->getData()->format("g") + ((float)$form["Time"]->getData()->format("i")) / 60;
            $entry->setTime($hours);

            //Set avg speed
            $avg_speed = round($distance / $hours, 2);

            //Check if avg speed includes a valid value
            if($avg_speed > 40){
                $user = $this->getEntries($user, $username);
                return $this->render('user.twig', array(
                    'user' => $user,
                    'form' => $form->createView(),
                    'errors' => ["No one can run that fast - shame on you!"]
                ));
            } else{
                $entry->setAvgSpeed($avg_speed);
            }
            //Push the new entry to db
            $manager->persist($entry);
            $manager->flush();
        }



        //Ooops, user does not exists :/
        if (!$user) {
            return $this->render('not_found.twig', array(
                'message' => 'User ' . $username . ' not found'
            ));
        }

        $user = $this->getEntries($user, $username);

        return $this->render('user.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'errors' => []
        ));



    }

    private function getEntries($user, $username){
        //Get all user entries
        $entries = $this->getDoctrine()
            ->getRepository(Entry::class)
            ->findBy(['user_id' => $user->getId()]);


        $entire_disance = 0;
        $user_entries = [];
        $days_between = 0;
        foreach($entries as $entry){
            //Get owner of the entry
            $entry_owner = $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy(['id' => $entry->getUserId()]);
            if($entry_owner->getName() == $username ){
                $user_entries[] = $entry;
                $entire_disance += $entry->getDistance();
            }
        }

        if(count($entries) >= 2){
            uasort($user_entries, function ( $a, $b ) {
                return $b->getDate()->getTimestamp() - $a->getDate()->getTimestamp();
            });
            $start_date = $user_entries[0]->getDate();
            $end_date = new DateTime();
            $days_between = floor(abs($start_date->getTimestamp() - $end_date->getTimestamp()) / 86400);
        }


        $user->entries = $user_entries;
        $user->days_trained = count($user_entries);
        $user->entire_time = $days_between;
        $user->entire_distance = $entire_disance;
        return $user;
    }
}