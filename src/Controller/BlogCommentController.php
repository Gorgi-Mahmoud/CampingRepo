<?php

namespace App\Controller;

use App\Entity\BlogComment;
use App\Form\BlogCommentType;
use App\Form\BlogType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Blog;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
class BlogCommentController extends AbstractController
{
    /**
     * @param Request $request
     * @param $id
     * @Route("/addComment/{id}", name="ajouterC")
     * @Security("is_granted('ROLE_USER')")
     */
    public function addComment(Request $request,$id)
    {
        $comment = new BlogComment();
        $form = $this->createForm(BlogCommentType::class, $comment);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {
            $comment->setTime(new \DateTime());
            $comment->setName($this->getUser()->getUsername());
            $comment->setEmail($this->getUser()->getEmail());
            $Blog = new Blog();
            $em=$this->getDoctrine()->getManager();
            $Blog=$em->getRepository(Blog::class)->find($id);
            $comment->setBlogId($Blog);
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute("blog");
        }
       // return $this->redirectToRoute("blog");
        return $this->render('blog_comment/addC.html.twig',array(
            'form'=> $form->createView()));
    }
}
