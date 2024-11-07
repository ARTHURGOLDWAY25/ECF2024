<?php
namespace App\Controller;

use App\Entity\UserRegistration;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
   
    public function register(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $userRegistration = new UserRegistration();
        $form = $this->createForm(RegistrationFormType::class, $userRegistration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Check if the email already exists
            $existingUser = $entityManager->getRepository(UserRegistration::class)->findOneBy(['email' => $userRegistration->getEmail()]);

            if ($existingUser) {
                $this->addFlash('error', 'Email exists already');
                return $this->redirectToRoute('app_registration'); // Use the correct route name
            }

            // Hash the password
            $hashedPassword = $userPasswordHasher->hashPassword($userRegistration, $form->get('password')->getData());
            $userRegistration->setPassword($hashedPassword);

            // Persist the new user entity
            $entityManager->persist($userRegistration);
            $entityManager->flush();

            // Success flash message
            $this->addFlash('success', 'User successfully created.');

            // Optionally redirect to a dashboard or another page
            return $this->redirectToRoute('app_user_login');
        }

        return $this->render('registration/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}


