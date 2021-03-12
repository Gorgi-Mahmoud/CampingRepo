<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use App\Entity\Blog;
use App\Entity\BlogComment;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class BlogCommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('Time')
            ->add('Name')
            ->add('email')
            ->add('blog_id', EntityType::class, [
                'class'  =>Blog::class,

            ])
            ->add('Contenu');
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BlogComment::class,
        ]);
    }
}
