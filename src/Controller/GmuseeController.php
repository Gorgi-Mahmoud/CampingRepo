<?php

namespace App\Controller;
use App\Entity\Images;
use App\Entity\Gmusee;
use App\Form\GmuseeType;
use App\Repository\AnnoncesRepository;
use App\Repository\GmuseeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer;
use Symfony\Component\Serializer\Serializer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
/**
 * @Route("/gmusee")
 */
class GmuseeController extends AbstractController
{
    /**
     * @Route("/back", name="gmusee_index_back", methods={"GET"})
     */

    public function index(GmuseeRepository $gmuseeRepository): Response
    {

        return $this->render('gmusee/index.html.twig', [
            'gmusees' => $gmuseeRepository->findAll(),
        ]);
    }
    /**
     * @Route("/", name="gmusee_index", methods={"GET"})
     */

    public function indexback(GmuseeRepository $gmuseeRepository): Response
    {

        return $this->render('gmusee/index1.html.twig', [
            'gmusees' => $gmuseeRepository->findAll(),
        ]);
    }


    /**
     * @Route("/new", name="gmusee_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $gmusee = new Gmusee();
        $form = $this->createForm(GmuseeType::class, $gmusee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // On récupère les images transmises
            $images = $form->get('images')->getData();

            // On boucle sur les images
            foreach ($images as $image) {
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                // On copie le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('upload_directory'),
                    $fichier
                );

                // On crée l'image dans la base de données
                $img = new Images();
                $img->setName($fichier);
                $gmusee->addImage($img);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($gmusee);
            $entityManager->flush();

            return $this->redirectToRoute('gmusee_index');
        }

        return $this->render('gmusee/new.html.twig', [
            'gmusee' => $gmusee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="gmusee_show", methods={"GET"} )
     */
    public function show(Gmusee $gmusee): Response
    {
        return $this->render('gmusee/show.html.twig', [
            'gmusee' => $gmusee,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="gmusee_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Gmusee $gmusee): Response
    {
        $form = $this->createForm(GmuseeType::class, $gmusee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gmusee_index');
        }

        return $this->render('gmusee/edit.html.twig', [
            'gmusee' => $gmusee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="gmusee_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Gmusee $gmusee): Response
    {
        if ($this->isCsrfTokenValid('delete' . $gmusee->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($gmusee);
            $entityManager->flush();
        }

        return $this->redirectToRoute('gmusee_index');
    }
    /**
     * Matches /gmusee/*
     *
     * @Route("/blog/{index1}", name="gmusee_index1")
     */
    public function index1($index1)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }
    /**
     * @Route("/searchGmusee ", name="searchGmusee")
     */
    public function searchGmusee(Request $request, NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Gmusee::class);
        $requestString=$request->get('searchValue');
        $gmusee = $repository->findGmuseeByPlace($requestString);
        $jsonContent = $Normalizer->normalize($gmuses, 'json',['groups'=>'gmuses']);
        $retour=json_encode($jsonContent);
        return new Response($retour);
    }
    /**
     * @Route("/supprime/image/{id}", name="gmusee_delete_image", methods={"DELETE"})
     */
    public function deleteImage(Images $image, Request $request){
        $data = json_decode($request->getContent(), true);

        // On vérifie si le token est valide
        if($this->isCsrfTokenValid('delete'.$image->getId(), $data['_token'])){
            // On récupère le nom de l'image
            $nom = $image->getName();
            // On supprime le fichier
            unlink($this->getParameter('uploads_directory').'/'.$nom);

            // On supprime l'entrée de la base
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();

            // On répond en json
            return new JsonResponse(['success' => 1]);
        }else{
            return new JsonResponse(['error' => 'Token Invalide'], 400);
        }
    }
}
