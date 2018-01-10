<?php
namespace App\Controller;
use App\Entity\Entry;
use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
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

class DefaultController extends Controller {



    /**
     * @Route("/")
     * @return Response
     */
    public function index(Request $request, TranslatorInterface $translator) {
        //Get all users
        $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        //Get all entries
        $entries = $this->getDoctrine()
            ->getRepository(Entry::class)
            ->findAll();

        $entriesPerUser = null;
        foreach ($users as $user){
            $user->days_trained = 0;
            $user->entire_distance = 0;
        }

        //Go through each entry and create statistics
        foreach($entries as $entry){
            //Get owner of the entry
            $entry_owner = $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy(['id' => $entry->getUserId()]);
            foreach($users as $user){
                if($entry_owner->getName() == $user->getName() ){
                    $user->user_entries[] = $entry;
                    $user->entire_distance += $entry->getDistance();
                    $user->days_trained += 1;
                }
            }
        }

        //Create a formular
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('go'))
            ->setMethod('POST')
            ->add('name', TextType::class)
            ->add('Save', SubmitType::class, array('label' => 'Go!!!'))
            ->getForm();

        $form->handleRequest($request);

        return $this->render('overview.twig', array(
            'users' => $users,
            'form' => $form->createView()
        ));
    }
}
