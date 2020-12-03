<?php

namespace App\Form;

use App\Entity\Films;
use App\Entity\Acteur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilmsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $Acteurs)
    {
        $builder
            ->add('Titre')
            ->add('categorie')
            ->add('DateAt')
            ->add('realisateur')
            ->add('Affiche')
            ->add('description')
            ->add('bande_annonce')
         
            ->add('Acteurs',EntityType::class, [
                'class' => Acteur::class,
                'choice_label'=>'name',
                'expanded' => true,
                'multiple' => true
            ]);
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Films::class,
        ]);
    }
}
