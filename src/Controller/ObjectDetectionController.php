<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ObjectDetectionController extends AbstractController
{
    /**
     * @Route("/object-detection", name="object_detection")
     */
    public function index(): Response
    {
        return $this->render('object_detection/index.html.twig');
    }
}
