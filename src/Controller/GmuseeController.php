<?php

namespace App\Controller;
use App\Entity\Images;
use App\Entity\Gmusee;
use App\Form\GmuseeType;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Repository\GmuseeRepository;
use App\Repository\ProduitRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer;
use Symfony\Component\Serializer\Serializer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/gmusee")
 */
class GmuseeController extends AbstractController
{

    /**
     * @param GmuseeRepository $gmuseeRepository
     * @param PaginatorInterface $paginator
     * @param $request
     * @return Response $response
     * @Route("/back", name="gmusee_index_back", methods={"GET"})
     *  @Security("is_granted('ROLE_ADMIN')")
     */

    public function indexback(GmuseeRepository $gmuseeRepository , PaginatorInterface $paginator, Request $request): Response
    {  $gmusee=$gmuseeRepository->findAll();
        $gmuseee = $paginator->paginate(

            $gmusee,

            $request->query->getInt('page', 1),

            5
        );

        return $this->render("gmusee/index.html.twig",
            ['gmusee'=>$gmuseee]);
    }

    /**
     * @Route("/", name="gmusee_index", methods={"GET"})
     * @param GmuseeRepository $gmuseeRepository
     * @param PaginatorInterface $paginator
     * @param $request
     * @return Response
     *  @Security("is_granted('ROLE_USER')")
     */

    public function index(GmuseeRepository $gmuseeRepository, PaginatorInterface $paginator, Request $request): Response
    {

        $gmusee=$gmuseeRepository->findAll();
        $gmuseee = $paginator->paginate(

            $gmusee,

            $request->query->getInt('page', 1),

            5
        );

        return $this->render("gmusee/index1.html.twig",
            ['gmusees'=>$gmuseee]);
    }



    /**
     * @param Request $request
     * @return Response $response
     * @Route("/new", name="gmusee_new", methods={"GET","POST"})
     *  @Security("is_granted('ROLE_ADMIN')")
     */
    public function new(Request $request): Response
    {
        $gmuseee = new Gmusee();
        $form = $this->createForm(GmuseeType::class, $gmuseee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $images = $form->get('images')->getData();


            foreach ($images as $image) {

                $fichier = md5(uniqid()) . '.' . $image->guessExtension();


                $image->move(
                    $this->getParameter('upload_directory'),
                    $fichier
                );


                $img = new Images();
                $img->setName($fichier);
                $gmuseee->addImage($img);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($gmuseee);
            $entityManager->flush();

            return $this->redirectToRoute('gmusee_index_back');
        }

        return $this->render('gmusee/new.html.twig', [
            'gmuseee' => $gmuseee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="gmusee_show", methods={"GET"} )
     * @param Gmusee $gmusee
     * @return Response
     *  @Security("is_granted('ROLE_ADMIN')")
     */
    public function show(Gmusee $gmusee): Response
    {
        return $this->render('gmusee/show.html.twig', [
            'gmusee' => $gmusee,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="gmusee_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Gmusee $gmusee
     * @return Response
     *  @Security("is_granted('ROLE_ADMIN')")
     */
    public function edit(Request $request, Gmusee $gmusee): Response
    {
        $form = $this->createForm(GmuseeType::class, $gmusee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gmusee_index_back');
        }

        return $this->render('gmusee/edit.html.twig', [
            'gmusee' => $gmusee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param Request $request
     * @param Gmusee $gmusee
     * @return Response
     * @Route("/{id}", name="gmusee_delete", methods={"DELETE"})
     *  @Security("is_granted('ROLE_ADMIN')")
     */
    public function delete(Request $request, Gmusee $gmusee): Response
    {
        if ($this->isCsrfTokenValid('delete' . $gmusee->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($gmusee);
            $entityManager->flush();
        }

        return $this->redirectToRoute('gmusee_index_back');
    }

    /**
     * Matches /gmusee/*
     *
     * @Route("/blog/{index1}", name="gmusee_index1")
     * @param $index1
     */
    public function index1($index1)
    {

    }


    /**
     * @param Request $request
     * @param GmuseeRepository $repository
     * @param PaginatorInterface $paginator
     * @return Response
     * @Route ("search", name="searchStudentx")
     */
    public function search(Request $request , GmuseeRepository $repository,PaginatorInterface $paginator): Response
    {

        $input=$request->get('search');
        $gmuseee=$repository->findGmuseeByPlace(['place'=>$input]);
        $gmuseee = $paginator->paginate(
        // Doctrine Query, not results
            $gmuseee,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );
        return $this->render('gmusee/index.html.twig',['gmusee'=>$gmuseee]);
    }
    /**
     * @param Images $image
     * @param Request $request
     * @return JsonResponse $response
     * @Route("/supprime/image/{id}", name="gmusee_delete_image", methods={"DELETE"})
     */
    public function deleteImage(Images $image, Request $request) : JsonResponse
    {
        $data = json_decode($request->getContent(), true);


        if($this->isCsrfTokenValid('delete'.$image->getId(), $data['_token'])){
            // On récupère le nom de l'image
            $nom = $image->getName();
            // On supprime le fichier
            unlink($this->getParameter('uploads_directory').'/'.$nom);


            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();


            return new JsonResponse(['success' => 1]);
        }else{
            return new JsonResponse(['error' => 'Token Invalide'], 400);
        }
    }

//    /**
//     * @Route("ListG",name="ListG")
//     * @param GmuseeRepository $gmuseeRepository
//     */
//    function ListG (GmuseeRepository $gmuseeRepository){
//
//        // Configure Dompdf according to your needs
//        $pdfOptions = new Options();
//        $pdfOptions->set('defaultFont', 'Arial');
//
//        // Instantiate Dompdf with our options
//        $dompdf = new Dompdf($pdfOptions);
//        $gmusee=$gmuseeRepository->findAll();
//
//        /*  return $this->render("produit/listP.html.twig",
//              ['produit'=>$produit]);*/
//
//        // Retrieve the HTML generated in our twig file
//        $html = $this->renderView("gmusee/listG.html.twig",
//            ['gmusee'=>$gmusee]);
//
//        // Load HTML to Dompdf
//        $dompdf->loadHtml($html);
//
//        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
//        $dompdf->setPaper('A4', 'Portrait');
//
//        // Render the HTML as PDF
//        $dompdf->render();
//
//        // Output the generated PDF to Browser (force download)
//        $dompdf->stream("mypdf.pdf", [
//            "Attachment" => false
//        ]);
//
//    }
}