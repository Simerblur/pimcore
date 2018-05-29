<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Forms\Contact as ContactForm;
use AppBundle\Forms\Career as CareerForm;
use AppBundle\Forms\ContactSolution as ContactSolutionForm;
use Symfony\Component\HttpFoundation\Session\Session;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request) {

        $form = $this->createForm(ContactForm::class, [], ['service_container' => $this->get('translator')]);
        $form->handleRequest($request);

        return $this->render('contact/contact.html.twig', [
            'contactForm' => $form->createView(),
            'captcha' => $this->get('captcha'),
        ]);
    }

    /**
     * @Route("/contactsend", name="contactsend")
     */
    public function sendContactFormAction(Request $request) {

        $form = $this->createForm(ContactForm::class, [], ['service_container' => $this->get('translator')]);
        $form->handleRequest($request);

        $captcha = $this->get('captcha');

        if ($form->isSubmitted() && $form->isValid() && $captcha->isValid($request)) {
            $systemEmail = 'info@advox.pl';
            $mailer = $this->get('system.mailer');
            $mailer->sendMail('contact', $systemEmail, [
                'contact_interestedin' => $form->get('interestedin')->getData(),
                'contact_name' => $form->get('name')->getData(),
                'contact_email' => $form->get('email')->getData(),
                'contact_message' => $form->get('description')->getData()
            ]);

            $response = $this->redirectToRoute('contactsendview');
        } else {
            $response = $this->render('contact/form.html.twig', [
                'contactForm' => $form->createView(),
            ]);
        }

        return $response;
    }

    /**
     * @Route("/contactsendview", name="contactsendview")
     */
    public function contactSendViewAction(Request $request) {

        return $this->render('contact/contactsend.html.twig');
    }
}