<?php

namespace App\Form;

use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('city')
            ->add('room_count')
            ->add('people_count')
            ->add('bed_count')
            ->add('type')
            ->add('smoker')
            ->add('pets')
            ->add('title')
            ->add('content')
            ->add('price')
            ->add('pay_type')
            ->add('due_date')
            ->add('img_path')
            ->add('author')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
