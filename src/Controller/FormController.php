<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class FormController extends AbstractController
{
    public function connexion()
    {
        $form = $this->createFormBuilder()
                ->add('login',TextType::class)
                ->add(motDePasse,PasswordType::class)
                ->add('Valider',SubmitType::class)
                ->add('annuler',ResetType::class)
                ->getForm();
         $request = Request::createFormGlobals();
        $form->handleRequest($request) ;
        
        if ($form->isSubmitted()){
            $data = $form->getData();
           
       
        }
            return $this->render('connexion/index.html.twig',
                    array('form'=>$form->createView()));
        }
        
            
               
       
    }

