<?php

namespace App\Controller\Admin;

use App\Entity\Acteur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
class ActeurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Acteur::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('name'),
            TextEditorField::new('description'),
            ImageField::new('imageFile')
            ->setBasePath("%photo_images%")
            ->setFormType(VichyImageType::class)
           
            ,
        ];
    }
    
}
