<?php

namespace App\Controller;

use App\Repository\BilletRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Vol;
use App\Form\VolType;
use App\Repository\VolRepository;

#[Route('/front')]
class FrontController extends AbstractController
{
    #[Route('/', name: 'app_vol_index_front', methods: ['GET'])]
    public function index(VolRepository $volRepository, BilletRepository $billetRepository): Response
    {
        return $this->render('frontoffice/index.html.twig', [
            'vols' => $volRepository->findAll(),
            'billets' => $billetRepository->findAll(),
        ]);
    }
}
