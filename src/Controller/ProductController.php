<?php

namespace App\Controller;

use Nelmio\ApiDocBundle\Annotation as Doc;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use Symfony\Component\HttpFoundation\Request;

// use FOS\RestBundle\FOSRestBundle\Controller\AbstractFOSRestController;

class ProductController extends Controller{
    
    /**
     * @Route("/api/products/{user}/rewards", methods={"GET"})
     */
    public function fetchUserAction($user)
    {
        return $this->json(["data"=>$user]);
    }
    /**
    * @Route("/api/products", methods={"POST"})
    * @RequestParam(
    *   name="firstname",
    *   key=null,
    *   requirements="",
    *   default=null,
    *   description="",
    *   strict=true,
    *   map=false,
    *   nullable=false
    * )
    * @RequestParam(
    *   name="lastname",
    *   key=null,
    *   requirements="",
    *   default=null,
    *   description="",
    *   strict=true,
    *   map=false,
    *   nullable=false
    * )
    */
    public function CreateUserAction(Request $request)
    {
        // $content = $request->getContent();
        // echo $content;
        // exit;
        $content = json_decode($request->getContent(), true);

        return $this->json($content);
    }
    /**
     * @Route("/api/products/{user}", methods={"PUT"})
     */
    public function UpdateUserAction($user)
    {
        return $this->json(["data"=>$user]);
    }
    /**
     * @Route("/api/products/{user}", methods={"DELETE"})
     */
    public function DeleteUserAction($user)
    {
        return $this->json(["data"=>$user]);
    }

}