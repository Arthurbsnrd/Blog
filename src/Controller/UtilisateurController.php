<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
use App\Entity\Article;

class UtilisateurController extends AbstractController
{
    #[Route('/utilisateur', name: 'app_utilisateur')]
    public function index(): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/category/{categoryName}', name: 'articles_by_category')]
public function showByCategory(string $categoryName, ArticleRepository $articleRepository): Response
{
    $articles = $articleRepository->findByCategoryName($categoryName);

    return $this->render('article/index.html.twig', [
        'articles' => $articles,
    ]);
}
#[Route('/article/{id}', name: 'article_show')]
public function show(Article $article): Response
{
    return $this->render('article/show.html.twig', [
        'article' => $article,
    ]);
}
}
