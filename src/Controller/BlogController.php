<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Entity\BlogComment;
use App\Form\BlogType;
use App\Repository\BlogRepository;
use phpDocumentor\Reflection\Type;
use PhpParser\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Ob\HighchartsBundle\Highcharts\Highchart;
class   BlogController extends AbstractController
{
    /**
 * @Route("/blog", name="blog")
 */
    public function affiche(BlogRepository $rep)

    {
        $Blog = $rep->findBy([], ['Flush' => 'DESC']);
        return $this->render('blog/index.html.twig', [
            'Blog' => $Blog
        ]);
    }
    /**
     * @Route("/blogD", name="Topnews")
     */
    public function affichenews(BlogRepository $rep)

    {
        $Blog = $rep->findBy([], ['date_creation' => 'DESC']);
        return $this->render('blog/index.html.twig', [
            'Blog' => $Blog
        ]);
    }
    /**
     * @Route("/blogV", name="Topvue")
     */
    public function affichevue(BlogRepository $rep)

    {
        $Blog = $rep->findBy([], ['vues' => 'DESC']);
        return $this->render('blog/index.html.twig', [
            'Blog' => $Blog
        ]);
    }

    /**
     * @param Request $request
     * @return Symfony\Component\HttpFoundation\Response
     * @Route("/add", name="ajouter")
     */

    public function addBlog(Request $request)
    {
        $blog = new Blog();
        $form = $this->createForm(BlogType::class, $blog);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $blog->setDateCreation(new \DateTime());

            $em->persist($blog);
            $em->flush();
            return $this->redirectToRoute("blog");

        }

        return $this->render('blog/add.html.twig',array(
            'form'=> $form->createView()));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/update/{id}",name="update")
     */


    public function updateBlog(Request $request,$id){
        $Blog = new Blog();
        $em=$this->getDoctrine()->getManager();
        $Blog=$em->getRepository(Blog::class)->find($id);
        $form=$this->createForm(BlogType::class,$Blog);
        $form->add('Update',SubmitType::class);
        $Blog->setDateUpdate(new \DateTime());

        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success', "Blog modifié!");
            return $this->redirectToRoute('blog');
        }

        return $this->render('blog/update.html.twig', array
        ('form' => $form->createView()));
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/d/{id}",name="d")

     */

    public function supprimerBlog($id)
    {
        $em = $this->getDoctrine()->getManager();
        $Blog = $em->getRepository(Blog::class)->find($id);
        $em->remove($Blog);
        $em->flush();//les deux lignes la supprission
        $this->addFlash('success', "Blog supprimé avec succes!");
        return $this->redirectToRoute('blog');
    }





    /**
     * @Route("/blog/{id}", name="aff")
     * @param $id
     */
    public function afficheBlog(BlogRepository $rep,$id)

    {

        $Blog = $rep->find($id);
        $Blog->setVues($Blog->getVues() + 1 );
        $em=$this->getDoctrine()->getManager();
        $em->persist($Blog);
        $em->flush();
        $comments=$Blog->getBlogComments();
        return $this->render('blog/aff.html.twig', [
            'Blog' => $Blog,'comments' => $comments
        ]);
    }
    public function count()
    {
        $qb = $this->createQueryBuilder('t');
        return $qb
            ->select('count(t.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * @Route("/home", name="home")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function afficheBlogg(BlogRepository $rep){
        $med=$this->getDoctrine()->getRepository(Blog::class)->findAll();
        //$nombre=$this->getDoctrine()->getRepository(Blog::class)->countid();
        //instance bundle chart
        $ob1 = new Highchart();
        //ne5tarou el type mta3 el chart piechart hoya type doura
        $ob1->chart->renderTo('piechart');
        $ob1->title->text('Blog PAR Pub');
        $ob1->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',

            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => true
        ));
        $data = null;
        foreach($med as $value)
        {
            $data[] = array(
                '' .$value->getId(), (int)$value->getVues(),
            );
        }

        $ob1->series(array(array('type' => 'pie', 'name' => 'Vues', 'data' => $data)));

        return $this->render('blog/stats.html.twig', [
            'controller_name' => 'BlogController','piechart'=>$ob1
        ]);
    }



}
