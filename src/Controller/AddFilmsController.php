<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use App\Entity\Films;

class AddFilmsController extends AbstractController
{
    /**
     * @Route("/add/films", name="add_films")
     */
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $films = new Films();
        $date = "01-09-2015";
        $films->setTitre('harry Potter');
        $films->setcategorie("action");
        $films->setDateAt(\DateTime::createFromFormat('d-m-Y',$date));
        $films->setrealisateur('chris colombus');
        $films->setaffiche('http');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($films);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$films->getId());
    }
   
}
