<?php

namespace GpsApi\AdministrationBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends FOSRestController
{
    /**
     * @Rest\Get("/api/def", name="_alldef")
     */
    public function indexAction()
    {
        var_dump('hello');die();
        return $this->render('GpsApiAdministrationBundle:Default:index.html.twig');
    }
}
