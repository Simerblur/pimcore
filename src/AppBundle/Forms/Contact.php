<?php

namespace AppBundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class Contact extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('interestedin', ChoiceType::class, array(
                    'choices' => array(
                        '_E_COMMERCE_MAGENTO_DEVELOPMENT_CONTACT' => '_E_COMMERCE_MAGENTO_DEVELOPMENT_CONTACT',
                        '_FRONTEND_DEVELOPMENT_CONTACT' => '_FRONTEND_DEVELOPMENT_CONTACT',
                        '_ZEND_SYMFONY_DEVELOPMENT_CONTACT_' => '_ZEND_SYMFONY_DEVELOPMENT_CONTACT_',
                        '_OTHER_DEVELOPMENT_CONTACT_' => '_OTHER_DEVELOPMENT_CONTACT_',
                        '_E_COMMERCE_CONSULTING_' => '_E_COMMERCE_CONSULTING_',
                        '_UX_DESIGN_CONTACT_' => '_UX_DESIGN_CONTACT_',
                        '_GENERAL_ENQUIRY_' => '_GENERAL_ENQUIRY_'
                    ),
                    'required' => false,
                    'placeholder' => '_INTERESTED_IN_',
                    'empty_data' => null
                ))
                ->add('name', TextType::class, [
                    'required' => false,
                ])
                ->add('phone', TextType::class, [
                    'required' => false,
                ])
                ->add('email', TextType::class, [
                    'required' => false,
                    'constraints' => array(
                        new Email(),
                    ),
                ])
//                ->add('budget', ChoiceType::class, array(
//                    'choices' => array(
//                        '_SMALL_BUDGET_' => '_SMALL_BUDGET_',
//                        '_MIDDLE_BUDGET_' => '_MIDDLE_BUDGET_',
//                        '_BIG_BUDGET_' => '_BIG_BUDGET_'
//                    ),
//                    'required' => false,
//                    'placeholder' => '_BUDGET_',
//                    'empty_data' => null
//                ))
                ->add('description', TextareaType::class, [
                    'required' => false,
        ]);
        $translator = $options['service_container'];

        $validator = function(FormEvent $event) use ($translator) {

            $form = $event->getForm();
            $interestedin = $form->get('interestedin')->getData();
            $name = $form->get('name')->getData();
            $email = $form->get('email')->getData();
            $phone = $form->get('phone')->getData();
//            $budget = $form->get('budget')->getData();

            if (empty($name) || empty($interestedin) || empty($email) || empty($phone)) {
                $form->addError(new FormError($translator->trans('_ANYFIELD_IS_REQUIRED_')));
            }
        };

        $builder->addEventListener(FormEvents::POST_SUBMIT, $validator);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setRequired('service_container');
    }

}
