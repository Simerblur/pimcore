<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Forms\Contact as ContactForm;
use AppBundle\Forms\Career as CareerForm;
use Symfony\Component\HttpFoundation\Session\Session;

class CareersControler extends Controller
{
    /**
     * @Route("/careers", name="careers")
     */
    public function careersAction(Request $request) {

        return $this->render('careers/careers.html.twig');
    }

    /**
     * @Route("/careers/senior-php-career", name="seniorphpcareer")
     */
    public function seniorphpcareerAction(Request $request) {

        $form = $this->createForm(CareerForm::class, [], array('career_type' => 'Senior PHP Developer',
            'service_container' => $this->get('translator')));

        return $this->render('careers/seniorphpcareer.html.twig', [
            'contactForm' => $form->createView(),
            'captcha' => $this->get('captcha'),
        ]);
    }

    /**
     * @Route("/careers/senior-developer-career", name="seniordevelopercareer")
     */
    public function seniordevelopercareerAction(Request $request) {

        $form = $this->createForm(CareerForm::class, [], array('career_type' => 'Senior Developer',
            'service_container' => $this->get('translator')));

        return $this->render('careers/seniordevelopercareer.html.twig', [
            'contactForm' => $form->createView(),
            'captcha' => $this->get('captcha'),
        ]);
    }

    /**
     * @Route("/careers/frontend-developer-career", name="frontenddevelopercareer")
     */
    public function frontenddevelopercareerAction(Request $request) {

        $form = $this->createForm(CareerForm::class, [], array('career_type' => 'Frontend Developer',
            'service_container' => $this->get('translator')));

        return $this->render('careers/frontenddevelopercareer.html.twig', [
            'contactForm' => $form->createView(),
            'captcha' => $this->get('captcha'),
        ]);
    }

    /**
     * @Route("/careers/junior-frontend-developer-career", name="juniorfrontenddevelopercareer")
     */
    public function juniorfrontenddevelopercareerAction(Request $request) {

        $form = $this->createForm(CareerForm::class, [], array('career_type' => 'Junior Frontend Developer',
            'service_container' => $this->get('translator')));

        return $this->render('careers/juniorfrontenddevelopercareer.html.twig', [
            'contactForm' => $form->createView(),
            'captcha' => $this->get('captcha'),
        ]);
    }

    /**
     * @Route("/careers/magento-developer-career", name="magentodevelopercareer")
     */
    public function magentodevelopercareerAction(Request $request) {

        $form = $this->createForm(CareerForm::class, [], array('career_type' => 'Magento Developer',
            'service_container' => $this->get('translator')
        ));

        return $this->render('careers/magentodevelopercareer.html.twig', [
            'contactForm' => $form->createView(),
            'captcha' => $this->get('captcha'),
        ]);
    }

    /**
     * @Route("/careersend", name="careersend")
     */
    public function sendCareerFormAction(Request $request) {


        $form = $this->createForm(CareerForm::class, [], ['service_container' => $this->get('translator')]);
        $form->handleRequest($request);
        $captcha = $this->get('captcha');

        if ($form->isSubmitted() && $form->isValid() && $captcha->isValid($request)) {
            $systemEmail = 'info@advox.pl';
            $fileDir = $this->get('kernel')->getRootDir() . '/../var/uploads';
            $file = $form->get('cv')->getData();
            if ($file) {
                $file->move($fileDir, $file->getClientOriginalName());
                $attachments = [$fileDir . '/' . $file->getClientOriginalName()];
            } else {
                $attachments = array();
            }

            $mailer = $this->get('system.mailer');
            $mailer->sendMail('career', $systemEmail, [
                'contact_name' => $form->get('name')->getData(),
                'contact_phone' => $form->get('phone')->getData(),
                'contact_email' => $form->get('email')->getData(),
                'cover_letter' => $form->get('cover_letter')->getData(),
                'career_type' => $form->get('career_type')->getData()
            ], $attachments);

            $response = $this->render('contact/success.html.twig', [
            ]);
        } else {
            $response = $this->render('careers/form.html.twig', [
                'contactForm' => $form->createView(),
                'captcha' => $this->get('captcha'),
            ]);
        }

        return $response;
    }
}