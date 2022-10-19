<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProjectRepository;
use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
    
    #[Route('/', name: 'app_home')]
    public function index(ProjectRepository $projectRepo): Response
    {
        $projects = $projectRepo->findAll();
        return $this->render('home/index.html.twig',[
            'projects' => $projects
        ]);
    }
}
