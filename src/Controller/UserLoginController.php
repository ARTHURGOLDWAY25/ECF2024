<?php

namespace App\Controller;

use App\Entity\UserLogin;
use App\Entity\UserRegistration;
use App\Form\UserLoginFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserLoginController extends AbstractController
{
   
    public function login(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher ): Response
    {
        $userLogin = new UserLogin();
        $form = $this->createForm(UserLoginFormType::class, $userLogin);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $email = $userLogin->getEmail();
            $user = $entityManager->getRepository(UserRegistration::class)->findOneBy(['email' => $email]);

            if($user){
                 // Verify the password
                if($passwordHasher->isPasswordValid($user, $userLogin->getPassword())){

                    $this->addFlash('Success', 'You have successfully loggede in.');
                    return $this->redirectToRoute("app_dashboard");
                } else {
                    $this->addFlash('Error', 'Invalid credentials');
                }
    
            } else{
                $this->addFlash('error', 'No account found for this user');
            }   
        }

        return $this->render('user_login/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
