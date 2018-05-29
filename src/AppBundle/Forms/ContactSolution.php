<?php

namespace AppBundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;

class ContactSolution extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $translator = $options['service_container'];
        $this->solution_type = $options['solution_type'];
        
        $builder               
            ->add('name', TextType::class,[
                'required' => false,
            ])
            
            ->add('phone', TextType::class,[
                'required' => false,
            ])
                
            ->add('email', TextType::class,[
                'required' => false,
                'constraints' => array(
                    new Email(),
                ),
            ])
                
            ->add('solution_type', HiddenType::class, [
                'data' => $this->solution_type,
                
            ]);

        $validator = function(FormEvent $event) use ($translator)
        {
            
            $form = $event->getForm();
            $name = $form->get('name')->getData();
            $phone = $form->get('phone')->getData();
            $email = $form->get('email')->getData();

            if (empty($name) || empty($phone) || empty($email)) {
                $form->addError(new FormError($translator->trans('_ANYFIELD_IS_REQUIRED_')));
            }
        };

        $builder->addEventListener(FormEvents::POST_SUBMIT, $validator);

    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'solution_type' => null,
            
        ));
        
        $resolver->setRequired('service_container');
    }

}