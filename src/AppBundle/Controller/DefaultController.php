<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/upload")
     */
    public function postAction(Request $request)
    {
        $image = $request->files->get('img');
        $uploader = $this->container->get('file_uploader');
        $uploader->uploadImage($image);

        return new Response('Plik zostal umieszczony na serwerze');
    }

}
