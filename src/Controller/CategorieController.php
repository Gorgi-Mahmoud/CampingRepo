<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }
    /**
     * @param CategorieRepository $repo
     * @return Response
     * @Route("/AfficheC",name="AfficheC")
     *
     */
    function AfficheC(CategorieRepository $repo){
        $categorie=$repo->findAll();
        return $this->render("categorie/afficheC.html.twig",
            ['categorie'=>$categorie]);
    }

    /**
     * @param $id
     * @param CategorieRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/DeleteC/{id}",name="DeleteC")

     */
    function Delete($id, CategorieRepository $repository){
        $categorie=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($categorie);//delete
        $em->flush();//mise à jour BD
        return $this->redirectToRoute('AfficheC');

    }
    /**
     * @Route("/AjoutC", name="categorie")
     */
    function AjoutC(Request $request){
        $categorie=new Categorie();
        $form=$this->createForm(CategorieType::class,$categorie);
        $form->add("Ajouter", SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('AfficheC');
        }
        return $this->render("categorie/addC.html.twig",
            ['form'=>$form->createView()]);
    }
    /**
     * @param $id
     * @param CategorieRepository $repository
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route ("/UpdateC/{id}",name="UpdateC")
     */
    function update($id,CategorieRepository $repository,Request $request){
        $categorie=$repository->find($id);
        $form=$this->createForm(CategorieType::class,$categorie);
        $form->add("Update", SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficheC');
        }
        return $this->render("categorie/addC.html.twig",
            ['form'=>$form->createView()]);
    }
    /**
     * @param Request $request
     * @Route ("searchC", name="searchC")
     */
    public function searchC(Request $request , CategorieRepository $repository,PaginatorInterface $paginator){

        $input=$request->get('search');
        $categorie=$repository->findBy(['nomCat'=>$input]);
        $categorie = $paginator->paginate(
        // Doctrine Query, not results
            $categorie,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );
        return $this->render('categorie/afficheC.html.twig',['categorie'=>$categorie]);
    }
}
