<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Images;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Form\SearchForm;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @Route("/AfficheP",name="AfficheP")
     */
    function AfficheP(ProduitRepository $repo, Request $request, PaginatorInterface $paginator){


        $allproduit=$repo->findAll();
        $produit = $paginator->paginate(
        // Doctrine Query, not results
            $allproduit,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );
        return $this->render("produit/afficheP.html.twig",
            ['produit'=>$produit]);
    }
    /**
     * @Route("/ListP",name="ListP")
     */
    function ListP (ProduitRepository $repo){

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $produit=$repo->findAll();

      /*  return $this->render("produit/listP.html.twig",
            ['produit'=>$produit]);*/

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView("produit/listP.html.twig",
            ['produit'=>$produit]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);

    }
    /**
     * @Route("/AfficheF",name="AfficheF")
     */
    function AfficheF(ProduitRepository $repo , Request $request){
        $data= new SearchData();
        $data->page = $request->get('page',1);
        $form = $this->createForm(SearchForm::class,$data);
        $form->handleRequest($request);

        $produit=$repo->findSearch($data);
        return $this->render("produit/affichefront.html.twig",
            ['produit'=>$produit,
                'form'=>$form->createView()]);
    }
    /**
     * @Route("produitShow/{id}", name="produitShow", methods={"GET"})
     * @param $id
     */
    public function produitShow($id,ProduitRepository $repository): Response
    {
       $produit=$repository->find($id);
        return $this->render('produit/product-detail.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/tri",name="tri")
     * @param ProduitRepository $repository
     * @param Request $request
     * @return Response
     */
    public function tri(ProduitRepository $repository,Request $request,PaginatorInterface $paginator){
        $Prix=$repository->OrderByPrix();
        $Prix = $paginator->paginate(
        // Doctrine Query, not results
            $Prix,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );
        return $this->render('produit/afficheP.html.twig',array('produit'=>$Prix));
    }
    /**
     * @Route("/triQ",name="triQ")
     * @param ProduitRepository $repository
     * @param Request $request
     * @return Response
     */
    public function triparQuantite(ProduitRepository $repository,Request $request,PaginatorInterface $paginator){
        $Quantite=$repository->OrderByQuantite();
        $Quantite = $paginator->paginate(
        // Doctrine Query, not results
            $Quantite,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );
        return $this->render('produit/afficheP.html.twig',array('produit'=>$Quantite));
    }

    /**
     * @param $id
     * @param ProduitRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("produit/DeleteP/{id}",name="DeleteP")
     */
    function Delete($id, ProduitRepository  $repository){
        $produit=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($produit);//delete
        $em->flush();//mise à jour BD
        return $this->redirectToRoute('AfficheP');

    }

    /**
     * @Route("/ajoutP", name="produit", methods={"GET","POST"})
     */
    function Ajout(Request $request):Response {
        $produit=new Produit();
        $form=$this->createForm(ProduitType::class,$produit);
        $form->add("Ajouter", SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()){
            //on recupere les images transmises
            $images = $form->get('images')->getData();
            //boucle sur les images
            foreach ($images as $image) {
            //on genere un nouveau nom de fichier
        $fichier = md5(uniqid()) . '.' . $image->guessExtension();
        // on copie le fichier dans le dossier uploads
        $image->move(
        $this->getParameter('upload_directory'),
        $fichier
        );
        // on stocke l'image dans la bdd
                $img = new Images();
                $img->setName($fichier);
                $produit->addImage($img);
            }
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('AfficheP');
        }
        return $this->render("produit/addP.html.twig",
            [
                'produit' => $produit,
                'form'=>$form->createView()]);
    }

    /**
     * @param $id
     * @param ProduitRepository $repository
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route ("/UpdateP/{id}",name="Update")
     */
    function update($id,ProduitRepository $repository,Request $request){
        $produit=$repository->find($id);
        $form=$this->createForm(ProduitType::class,$produit);
        $form->add("Update", SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid()){
            //on recupere les images transmises
            $images = $form->get('images')->getData();
            //boucle sur les images
            foreach ($images as $image) {
                //on genere un nouveau nom de fichier
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                // on copie le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('upload_directory'),
                    $fichier
                );
                // on stocke l'image dans la bdd
                $img = new Images();
                $img->setName($fichier);
                $produit->addImage($img);
            }
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficheP');
        }
        return $this->render("produit/addP.html.twig",
            ['form'=>$form->createView()]);
    }

    /**
     * @param Request $request
     * @Route ("search", name="search")
     */
    public function search(Request $request , ProduitRepository $repository,PaginatorInterface $paginator){

        $input=$request->get('search');
        $produit=$repository->findBy(['refProd'=>$input]);
        $produit = $paginator->paginate(
        // Doctrine Query, not results
            $produit,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );
        return $this->render('produit/afficheP.html.twig',['produit'=>$produit]);
    }

    /**
     * @Route ("/stats", name="stat")
     */
    public function  statisques ( CategorieRepository $categrepo){
        //onva chercher tous les categories
        $categories = $categrepo->findAll();

        $categNom =[];
        $categColor =[];
        $categCount =[];

        foreach ($categories as $categorie){
            $categNom[] = $categorie->getNomCat();
            $categColor[] =$categorie->getColor();
            $categCount[]= count($categorie->getProduits());
        }
        return $this->render("produit/stats.html.twig" , [
            'categNom' => json_encode($categNom),
            'categColor'=> json_encode($categColor),
            'categCount' => json_encode($categCount)
        ]);

    }

    /**
     * @Route("/supprime/image/{id}" , name="produits_delete_image", methods={"DELETE"})
     */
   /* public function deleteImage(Images $image , Request $request){
        $data = json_decode($request->getContent(),true);
        // on verifie si le token est valide
        if($this->isCsrfTokenValid('delete'.$image->getId(), $data['_token'])){
            // on recupere le nom de l'image
            $nom = $image->getName();
            //on supprime le fichier
            unlink($this->getParameter('upload_directory').'/'.$nom);
            //on supprime l'entree de la base

            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();

            // On repond en json
            return new JsonResponse(['success'=>1]);
        }else {
            return new JsonResponse(['error'=>'Token Invalide'],400);
        }

    }*/
}
