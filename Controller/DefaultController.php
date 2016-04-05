<?php

namespace TimiTao\BehatCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TimiTaoBehatCoreBundle:Default:index.html.twig');
    }
}
