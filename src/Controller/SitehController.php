<?php

namespace App\Controller;
use App\Entity\Photos;
use App\Entity\Siteh;
use App\Form\SitehType;

use App\Repository\SitehRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer;
use Symfony\Component\Serializer\Serializer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
/**
 * @Route("/siteh")
 */
class SitehController extends AbstractController
{
    /**
     * @Route("/back", name="siteh_index_back", methods={"GET"})
     * @param SitehRepository $sitehRepository
     * @return Response
     */

    public function index(SitehRepository $sitehRepository): Response
    {

        return $this->render('siteh/index.html.twig', [
            'sitehs' => $sitehRepository->findAll(),
        ]);
    }
    /**
     * @Route("/", name="siteh_index", methods={"GET"})
     */

    public function indexback(SitehRepository $sitehRepository): Response
    {

        return $this->render('siteh/index1.html.twig', [
            'sitehs' => $sitehRepository->findAll(),
        ]);
    }


    /**
     * @Route("/new", name="siteh_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $siteh = new Siteh();
        $form = $this->createForm(SitehType::class, $siteh);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // On récupère les images transmises
            $photos = $form->get('photos')->getData();

            // On boucle sur les images
            foreach ($photos as $photo) {
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()) . '.' . $photo->guessExtension();

                // On copie le fichier dans le dossier uploads
                $photo->move(
                    $this->getParameter('upload_directory'),
                    $fichier
                );

                // On crée l'image dans la base de données
                $img = new Photos();
                $img->setName($fichier);
                $siteh->addPhoto($img);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($siteh);
            $entityManager->flush();

            return $this->redirectToRoute('siteh_index');
        }

        return $this->render('siteh/new.html.twig', [
            'siteh' => $siteh,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="siteh_show", methods={"GET"} )
     */
    public function show(Siteh $siteh): Response
    {
        return $this->render('siteh/show.html.twig', [
            'siteh' => $siteh,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="siteh_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Siteh $siteh): Response
    {
        $form = $this->createForm(SitehType::class, $siteh);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('siteh_index');
        }

        return $this->render('siteh/edit.html.twig', [
            'siteh' => $siteh,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="siteh_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Siteh $siteh): Response
    {
        if ($this->isCsrfTokenValid('delete' . $siteh->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($siteh);
            $entityManager->flush();
        }

        return $this->redirectToRoute('siteh_index');
    }

    /**
     * Matches /siteh/*
     *
     * @Route("/blog/{index1}", name="siteh_index1")
     * @param $index1
     */
    public function index1($index1)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }

    /**
     * @Route("/searchSiteh", name="searchSiteh")
     * @param Request $request
     * @param NormalizerInterface $Normalizer
     * @return Response
     * @throws ExceptionInterface
     */
    public function searchSiteh(Request $request, NormalizerInterface $Normalizer): Response
    {
        $repository = $this->getDoctrine()->getRepository(Siteh::class);
        $requestString=$request->get('searchValue');
        $siteh = $repository->findByPlace($requestString);
        $jsonContent = $Normalizer->normalize($siteh, 'json',['groups'=>'siteh']);
        $retour=json_encode($jsonContent);
        return new Response($retour);
    }
}
