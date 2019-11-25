<?php

namespace App\Controller;

use App\Entity\Fichefrais;
use App\Form\FicheFraisType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;





class FichefraisController extends AbstractController
{
    /**
     * @Route("/home", name="fichefrais")
     */




        
     
      





    public function new(Request $request)
    {



      








        $FicheFrais = new FicheFrais();

        $user = $this->getUser();
        // $FicheFrais->setMois('Novembre');
        // $FicheFrais->setNbJustificatifs(1);

        $fichefraisform = $this->createForm(FicheFraisType::class, $FicheFrais);

        $fichefraisform->handleRequest($request);

        if ($fichefraisform->isSubmitted() && $fichefraisform->isValid()){

            $FicheFrais->setfkuser($user);
            $FicheFrais = $fichefraisform->getData();
            


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($FicheFrais);
            $entityManager->flush();



            return $this->redirectToRoute('home');

        }


        return $this->render('fichefrais/index.html.twig', [
            'form' => $fichefraisform->createView(),
        ]);
    }







//     public function index()
//     {
//         return $this->render('fichefrais/index.html.twig', [
//             'controller_name' => 'FichefraisController',
//         ]);
//     }
//    


}