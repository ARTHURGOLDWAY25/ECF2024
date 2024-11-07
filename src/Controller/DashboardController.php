<?php

namespace App\Controller;

use App\Entity\Dashboard;
use App\Form\DashboardType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DashboardController extends AbstractController
{
    public function dashboard(Request $request, EntityManagerInterface $entityManager): Response
    {
        $dashboard = new Dashboard();
        $form = $this->createForm(DashboardType::class, $dashboard);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Check if the username already exists
            $existingUser = $entityManager->getRepository(Dashboard::class)->findOneBy(['Username' => $dashboard->getUsername()]);
    
            if ($existingUser) {
                $this->addFlash('error', 'User already exists');
                return $this->redirectToRoute('app_dashboard');
            }
    
            // Persist and flush the entity
            $entityManager->persist($dashboard);
            $entityManager->flush();
    
            $this->addFlash('success', 'User credentials successfully created.');
            return $this->redirectToRoute('app_dashboard');
        }
    
        // Retrieving the latest entry to display in the modal
        $latestEntry = $entityManager->getRepository(Dashboard::class)->findBy([], ['id' => 'DESC'], 1);
    
        // Initialize variables for Twig template
        $fullName = $userName = $phoneNumber = $jobTitle = $aboutMe = null;
    
        if ($latestEntry) {
            $latestDashboard = $latestEntry[0]; // Access the first (and only) item from the array
            $fullName = $latestDashboard->getFullName();
            $userName = $latestDashboard->getUsername();
            $phoneNumber = $latestDashboard->getPhoneNumber();
            $jobTitle = $latestDashboard->getJobTitle();
            $aboutMe = $latestDashboard->getAboutMe();
        }
    
        return $this->render('dashboard/index.html.twig', [
            'form' => $form->createView(),
            'fullName' => $fullName,
            'userName' => $userName,
            'phoneNumber' => $phoneNumber,
            'jobTitle' => $jobTitle,
            'aboutMe' => $aboutMe,
        ]);
    }
    
}

