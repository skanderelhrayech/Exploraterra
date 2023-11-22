<?php

namespace App\Form;

use App\Entity\Vol;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numeroVol', null, [
                'label' => 'Flight Number',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('dateDepart', null, [
                'label' => 'Departure Date',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('dateArrivee', null, [
                'label' => 'Arrival Date',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('LieuDepart', null, [
                'label' => 'Departure Location',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('LieuArrivee', null, [
                'label' => 'Arrival Location',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('compagnieAerienne', null, [
                'label' => 'Airline',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('imagePath', FileType::class, [
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control-file'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vol::class,
        ]);
    }
}
