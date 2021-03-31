<?php


namespace App\Controller;
use App\Entity\Images;
use App\Entity\Gmusee;
use App\Entity\Siteh;
use App\Form\GmuseeType;
use App\Repository\AnnoncesRepository;
use App\Repository\GmuseeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ImagesController extends AbstractController
{
    /**
     * @Route("/images", name="images")
     */
    public function index(): Response
    {
        return $this->render('images/index.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }
}
