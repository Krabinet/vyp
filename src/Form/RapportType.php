<?php

namespace App\Form;

use App\Entity\Rapport;
use App\Entity\Visiteur;
use App\Entity\Medecin;
use App\Entity\Medicament;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class RapportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date' )
            ->add('motif', TextType::class, array(
                'label' => "Motif ",
            ))
            ->add('bilan', TextType::class, array(
                'label' => "Bilan ",
            ))
            ->add('idvisiteur', EntityType::class, array(
                'class' => Visiteur::class,
                'choice_label' => 'nom',
                'label' => 'Nom du visiteur ',
            ))
            ->add('idmedecin', EntityType::class, array(
                'class' => Medecin::class,
                'choice_label' => 'nom',
                'label' => 'Nom du médecin ',
            ))
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Rapport::class,
        ]);
    }
}
