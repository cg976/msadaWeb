<?php

namespace Cg976\MsadaWeb\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Cg976MsadaWebAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
