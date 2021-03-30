<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Question;
use App\Form\QuestionType;
use App\Repository\CategorieRepository;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/question")
 */
class QuestionController extends AbstractController
{
    /**
     * @Route("/categorie/{idcategorie}", name="question_index", methods={"GET","POST"})
     */
    public function index(QuestionRepository $questionRepository, CategorieRepository $categorieRepository,$idcategorie): Response
    {


        $em=$this->getDoctrine()->getManager();
        $categorie=$em->getRepository(Categorie::class)->find($idcategorie);

        $nbrVues=$categorie->getNbrVueCategorie();
        $categorie->setNbrVueCategorie($nbrVues+1);
        $em->flush();

        $categories=$this->getDoctrine()->getRepository(Categorie::class)->findAll();

        return $this->render('indexForum.html.twig', [
            'questions' => $questionRepository->findBy(array('categorie'=>$categorie)),
            'idcategorie'=>$idcategorie,
            'categorie'=>$categorie,
            'categories' =>$categorieRepository->findAll(array('categories'=>$categories)),
        ]);
    }

    /**
     * @Route("/categorieback/{idcategorie}", name="question_index_back", methods={"GET","POST"})
     */
    public function indexBack(QuestionRepository $questionRepository, CategorieRepository $categorieRepository,$idcategorie): Response
    {


        $em=$this->getDoctrine()->getManager();
        $categorie=$em->getRepository(Categorie::class)->find($idcategorie);



        return $this->render('question/indexBackQuestion.html.twig', [
            'questionsBack' => $questionRepository->findBy(array('categorie'=>$categorie)),
            'idcategorie'=>$idcategorie,
        ]);
    }


    /**
     * @Route("/new/{idcategorie}/test", name="question_new", methods={"GET","POST"})
     */
    public function new(Request $request,\Swift_Mailer $mailer,$idcategorie,QuestionRepository $questionRepository): Response
    {
        $question = new Question();
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        $em=$this->getDoctrine()->getManager();
        $categorie=$em->getRepository(Categorie::class)->find($idcategorie);

        $question->setCategorie($categorie);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($question);
            $entityManager->flush();
            $message = (new \Swift_Message('QuestionAjoutée'))
                ->setFrom('oueslati.wissem98@gmail.com')
                ->setTo('oueslati.wissem@esprit.tn')
                ->setBody("une question a été ajoutée")
            ;
            $mailer->send($message) ;

            $nbrquestion=$categorie->getNbrQuestion();
            $categorie->setNbrQuestion($nbrquestion+1);
            $em->flush();

            return $this->redirectToRoute('question_index',array('idcategorie' => $idcategorie));
        }

        return $this->render('createQuestion.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
            'idcategorie' => $idcategorie,
            'questions' => $questionRepository->findBy(array('categorie'=>$categorie))

        ]);
    }

    /**
     * @Route("/{id}", name="question_show", methods={"GET"})
     */
    public function show(Question $question): Response
    {
        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="question_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Question $question, CategorieRepository $categorieRepository): Response
    {

        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $idcategorie=$question->getCategorie()->getId();
            return $this->redirectToRoute('question_index',array('idcategorie'=>$idcategorie));
        }

        return $this->render('question/editQuestion.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
            'categories' => $categorieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/editBack", name="question_edit_back", methods={"GET","POST"})
     */
    public function editBack(Request $request, Question $question): Response
    {
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('question_index_back');
        }

        return $this->render('question/editBack.html.twig', [
            'questionBack' => $question,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}", name="question_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Question $question): Response
    {
        if ($this->isCsrfTokenValid('delete'.$question->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($question);
            $entityManager->flush();

            $nbrquestion=$categorie->getNbrQuestion();
            $categorie->setNbrQuestion($nbrquestion+1);
            $em->flush();
        }

        return $this->redirectToRoute('question_index');
    }

    /**
     * @Route("/{id}", name="question_delete_back", methods={"DELETE"})
     */
    public function deleteBack(Request $request, Question $question): Response
    {
        if ($this->isCsrfTokenValid('delete'.$question->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($question);
            $entityManager->flush();
        }

        return $this->redirectToRoute('question_index_back');
    }



}
