<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class OpenclassDutController extends AbstractController
{
   /**
     * @Route("/", name="Accueil")
     */
    public function index(): Response
    {
        return $this->render('openclass_dut/index.html.twig');
    }


    /**
     * @Route("/entreprises", name="entreprises")
     */
    public function afficherEntreprises(): Response
    {
        return $this->render('openclass_dut/afficherEntreprises.html.twig');
    }
    /**
     * @Route("/formations", name="formations")
     */
    public function afficherFormations(): Response
    {
        return $this->render('openclass_dut/afficherFormations.html.twig');
    }
    /**
     * @Route("/stages", name="openclass_dut")
     */
    public function afficherDescriptifStage($id): Response
    {
        return $this->render('openclass_dut/afficherDescriptifStages.html.twig', 
        ['idStage' => $id]);
    }
   
   
    }

