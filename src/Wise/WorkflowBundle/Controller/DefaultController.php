<?php

namespace Wise\WorkflowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WorkflowBundle:Default:index.html.twig');
    }
}
