<?php

namespace AppBundle\Controller;



use AppBundle\Entity\Stagiaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StagiaireController extends Controller
{
    /**
     * @Route("view-all-stagiaire", name="stagiaire_view_all")
     */
    public function viewAllStagiaire() {
        
        // récupérer le manager de doctrine pour récupérer les articles en bdd
        $em = $this->getDoctrine()->getManager();
        // on récupère le repository correspond, ici on veut les articles en bdd
        // et la méthode findAll renvoie tous ces articles
        $listestagiaires = $em->getRepository('AppBundle:Stagiaire')->findAll();

        $response = $this->render('/stagiaire/view_all_Stagiaire.html.twig', [
            'stagiaires' => $listestagiaires

        ]);
        return $response;
    }

    /**
     * @Route("remove-stagiaire/{id}", name="stagiaire_remove")
     */
    public function removeStagiaire($id) {


        // récupérer un seul article depuis la base de données
        $em = $this->getDoctrine()->getManager();
        $stagiaire = $em->getRepository("AppBundle:Stagiaire")->find($id);

        // supprimer une entité
        if ($stagiaire != null) {
            $em->remove($stagiaire);
            $em->flush();

            return $this->redirectToRoute('stagiaire_view_all');

        }
    }




}
