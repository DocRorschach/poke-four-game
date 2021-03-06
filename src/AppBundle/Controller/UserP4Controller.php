<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\User;
use AppBundle\Form\UserRegisterType;
use AppBundle\Form\UserLoginType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserP4Controller extends Controller {

    /**
     * @Route("/", name="home")
     */
    public function homeAction() {

        return $this->render('@App/P4/index.html.twig');
    }

    private function hydrate($aUser) {
        $oUser = new User();
        $oUser->setFirstname($aUser['firstName']);
        $oUser->setPseudo($aUser['pseudo']);
        $oUser->setPassword($aUser['password']);
        return $oUser;
    }

    private function saveUser($oUser) {
        $entityM = $this->getDoctrine()->getManager();
        $entityM->persist($oUser);
        $entityM->flush();
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $oRequest, UserPasswordEncoderInterface $oPasswordEncoder) {

        $oUser = new User();
        $oForm = $this->createForm(UserRegisterType::class, $oUser);
        $oForm->handleRequest($oRequest);


        if ($oForm->isSubmitted() && $oForm->isValid()) {
            //chiffrement pass
            $password = $oPasswordEncoder->encodePassword($oUser, $oUser->getPassword());
            $oUser->setPassword($password);
            $this->saveUser($oUser);
            //commentez la ligne return redirect pour le mode debug:
            //dump($oUser);
            return $this->redirectToRoute('home');
        }

        return $this->render('@App/P4/registerform.html.twig', [
                    'form' => $oForm->createView()
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction() {

        $oUser = new User();
        $oForm = $this->createForm(UserLoginType::class, $oUser);

        return $this->render('@App/P4/loginform.html.twig', [
                    'form' => $oForm->createView(),
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction() {
        
        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/rules", name="rules")
     */
    public function rulesAction() {

        return $this->render('@App/P4/rules.html.twig');
    }

    /**
     * 
     * @Route("/lobby", name="lobby")
     */
    public function lobbyAction() {

        return $this->render('@App/P4/lobby.html.twig');
    }
    
    /**
     * 
     * @Route("/victory-player1", name="victoryP1")
     */
    public function victoryP1Action() {

        return $this->render('@App/P4/victoryP1.html.twig');
    }
    
    /**
     * 
     * @Route("/victory-player2", name="victoryP2")
     */
    public function victoryP2Action() {

        return $this->render('@App/P4/victoryP2.html.twig');
    }

}
