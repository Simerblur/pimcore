<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Blogpost;
use Pimcore\Model\DataObject\Blogpost\Listing;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends FrontendController
{
    public function defaultAction()
    {
        $listing = new Listing();
        $this->view->blogpostList = $listing;
        return $this->render("index/index.html.twig");
    }

    public function blogarticleAction($id)
    {
        $this->view->blogarticle = \Pimcore\Model\DataObject\Blogpost::getById($id);
    }

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('index/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
        ]);
    }

}
