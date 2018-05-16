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

//        $paginator = \Zend_Paginator::factory($list);
//        $paginator->setCurrentPageNumber( $request->get('page') );
//        $paginator->setItemCountPerPage(10);
//        $this->view->paginator  = $paginator;
    }

    /**
     *
     */
    public function blogarticleAction($id){

      $this->view->blogarticle = \Pimcore\Model\DataObject\Blogpost::getById($this->getParam("id"));
       // $blogarticle = Blogpost::getById(5);
    }
}
