<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Blogpost;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends FrontendController
{
    public function defaultAction()
    {
        $this->view->blogpostList = new \Pimcore\Model\DataObject\Blogpost\Listing();
    }

    /**
     *
     */
    public function blogarticleAction($id){

       $this->view->blogarticle = \Pimcore\Model\DataObject\Blogpost::getById($id);
    }
}
