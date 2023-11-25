<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class HomeController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    #[Route('/home', name: 'app_home')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        $categories = $categorieRepository->findBy([], ['id' => 'DESC'], 3);
        $isAdmin = $this->security->isGranted('ROLE_ADMIN');
        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            'isAdmin' => $isAdmin,
        ]);
    }
}
