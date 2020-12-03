<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Films;
use App\Entity\Acteur;
use App\Entity\Daredevil;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\FilmsType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
class CinemaController extends AbstractController
{
    /**
     * @Route("/cinema", name="cinema")
     */
    public function index(): Response
    {   
    
        return $this->render('cinema/film.html.twig', [
            'controller_name' => 'CinemaController',
        ]);
    }
      /**
 * @Route("/", name="home")
 */
    public function home(){
       
        $repository = $this->getDoctrine()->getRepository(Films::class);
        $serie=$repository->findByCategorie("serie");
        $populaire= $repository->findByCategorie("films");
        return $this->render('accueil.html.twig',['populaire'=>$populaire,'serie'=>$serie]);
    }
       /**
 * @Route("/films/{id}", name="film")
 */
    public function film_show ($id){
        $repository = $this->getDoctrine()->getRepository(Films::class);
        $film=$repository->findById($id);
      
            return $this->render('film.html.twig',['film'=>$film]);
        
       
       
                     
      
    }
       /**
 * @Route("/serie/{id}", name="serie_show")
 */
public function serie_show ($id){
    $repository = $this->getDoctrine()->getRepository(Films::class);
    $serie=$repository->findById($id)
                    ;
        return $this->render('serie.html.twig',['serie'=>$serie]);
    
   
   
                 
  
}

           /**
 * @Route("/serie/dardevil/episode/{id}", name="serie")
 */
public function Daredevil($id){
    $repository = $this->getDoctrine()->getRepository(Daredevil::class);
    $episode=$repository->findById($id);
  
        return $this->render('daredevil.html.twig',['episode'=>$episode]);
    
   
   
                 
  
}
         /**
 * @Route("/administration", name="admin")
 */
public function form(Request $request,EntityManagerInterface $manager){
            $films=new Films();
            $ajouterFilms=$this->createForm(FilmsType::class,$films);
                               
                                $ajouterFilms->handleRequest($request);
                                if ($ajouterFilms->isSubmitted() && $ajouterFilms->isValid()) {
                                        
                                             $manager->persist($films);
                                             $manager->flush();
                                    return $this->redirectToRoute('home');
                                }
        return $this->render('administration.html.twig',[
            'form' => $ajouterFilms->createView(),
        ]);
    
   
   
                 
  
}
    
}

 

