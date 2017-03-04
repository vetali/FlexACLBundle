<?php

namespace vetali\FlexACLBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FlexACLBundle:Default:index.html.twig');
    }
}
