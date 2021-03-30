<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Reponse;
use App\Entity\Question;
use App\Entity\ReponseLike;
use App\Form\ReponseType;
use App\Repository\CategorieRepository;
use App\Repository\ReponseRepository;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reponse")
 */
class ReponseController extends AbstractController
{
    /**
     * @Route("/{idquestion}/test", name="reponse_index", methods={"GET","POST"})
     */
    public function index(ReponseRepository $reponseRepository,QuestionRepository $questionRepository,CategorieRepository $categorieRepository,$idquestion,Request $request): Response
    {
        $em=$this->getDoctrine()->getManager();
        $question=$em->getRepository(Question::class)->find($idquestion);

            $nbrVue=$question->getNbrVue();
            $question->setNbrVue($nbrVue+1);
            $em->flush();

        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        $em=$this->getDoctrine()->getManager();
        $question=$em->getRepository(Question::class)->find($idquestion);
        $reponse->setQuestion($question);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reponse);
            $entityManager->flush();



            $nbrReponse=$question->getNbrReponse();
            $question->SetNbrReponse($nbrReponse+1);
            $em->flush();
            return $this->redirectToRoute('reponse_index',array('idquestion' => $idquestion));
        }
        $categories=$this->getDoctrine()->getRepository(Categorie::class)->findAll();
        $questions=$this->getDoctrine()->getRepository(Question::class)->findAll();
        return $this->render('indexReponse.html.twig', [
            'reponses' => $reponseRepository->findBy(array('question'=>$question)),
            'idquestion'=>$idquestion,
            'question' => $question,
            'form' => $form->createView(),
            'reponse' => $reponse,
            'categories' =>$categorieRepository->findAll(array('categories'=>$categories)),
            'questions'  =>$questionRepository->findAll(array('questions'=>$questions)),

        ]);




    }

    /**
     * @Route("/{idquestion}/testBack", name="reponse_index_back", methods={"GET","POST"})
     */
    public function indexBack(ReponseRepository $reponseRepository,QuestionRepository $questionRepository,$idquestion): Response
    {
        $em=$this->getDoctrine()->getManager();
        $question=$em->getRepository(Question::class)->find($idquestion);



       // $nbrVue=$question->getNbrVue();
       // $question->setNbrVue($nbrVue+1);
       // $em->flush();
        return $this->render('reponse/indexBackReponse.html.twig', [
            'reponsesBack' => $reponseRepository->findBy(array('question'=>$question)),
            'idquestion'=>$idquestion,
            'question' => $question,
        ]);


    }

    /**
     * @Route("/new{idquestion}", name="reponse_new", methods={"GET","POST"})
     */
    public function new(Request $request,QuestionRepository $questionRepository,$idquestion): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        $em=$this->getDoctrine()->getManager();
        $question=$em->getRepository(Question::class)->find($idquestion);
        $reponse->setQuestion($question);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reponse);
            $entityManager->flush();

            $nbrReponse=$question->getNbrReponse();
            $question->SetNbrReponse($nbrReponse+1);
            $em->flush();
            return $this->redirectToRoute('reponse_index',array('idquestion' => $idquestion));
        }

        return $this->render('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
            'idquestion' => $idquestion,
        ]);
    }

    /**
     * @Route("/{id}", name="reponse_show", methods={"GET"})
     */
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponse/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reponse_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reponse $reponse, CategorieRepository $categorieRepository): Response
    {
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $idquestion=$reponse->getQuestion()->getId();

            return $this->redirectToRoute('reponse_index',array('idquestion'=>$idquestion));
        }

        return $this->render('reponse/editReponse.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
            'categories' => $categorieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/editBack", name="reponse_edit_back", methods={"GET","POST"})
     */
    public function editBack(Request $request, Reponse $reponse): Response
    {
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reponse_index_back');
        }

        return $this->render('reponse/editBack.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reponse_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Reponse $reponse): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reponse_index');
    }

    /**
     * @Route("/{id}", name="reponse_delete_back", methods={"DELETE"})
     */
    public function deleteBack(Request $request, Reponse $reponse): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reponse_index_back');
    }

    /**
     *("reponse/{id}" , name="reponse_show , methods{"GET"})
     */
 /*   public function showReponse(Reponse $reponse): Response
    {
        $user = $this->getUser();
        $em=$this->getDoctrine()->getManager();

        $isReponseAlreadyLiked =$em->getRepository(ReponseLike::class)->countByReponseAndUser($user,$reponse);
        return $this->render('reponse/index.html.twig', [
            'reponse'=>$reponse,
            'isReponseAlreadyLiked'=>$isReponseAlreadyLiked
            ]);
*/

 /*   /**
     * @Route("like-unlike", name="front_reponse-like-unlike")
     */
 /*   public function like(Request $request)
    {
        if($request->getMethod() == 'POST' && $request->isXmlHttpRequest()){
            $em=$this->getDoctrine()->getManager();
            $reponseId = $request->request->get('entityId');
            $reponse = $em->getRepository(Reponse::class)->findOneBy(array('id=>$reponseId'));
            if(!$reponse){
                return new JsonResponse();
            }
            $submittedToken = $request->request->get('csrfToken');
            if($this->isCsrfTokenValid('reponse' . $reponse->getId(), $submittedToken)){
                $user = $this->getUser();
                $ReponseAlreadyLiked = $em->getRepository(ReponseLike::class)->findOneBy(
                    array('user'=>$user , 'reponse'=>$reponse)
                );
                if ($ReponseAlreadyLiked){
                    $em->remove($ReponseAlreadyLiked);
                    $em->flush();
                    return new JsonResponse();
                }
                else{
                    $like= new ReponseLike();
                    $like->setUser($user);
                    $like->setReponse($reponse);
                    $em->persist($like);
                    $em->flush();
                }
            }

        }
        return new JsonResponse();
    }*/
}

