<?php
/**
 * Created by PhpStorm.
 * User: moham
 * Date: 11/02/2019
 * Time: 10:31
 */

namespace App\Controller;


#use http\Env\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class HomeController
{
    /**
     * @Route("/")
     */
    public function homepage(){

        return new Response('OMG! My first sympfony page ! :D');

    }
    /**
     * @Route("/article/toto")
     */
 //   public function read(){

  //      return new Response("L'article Toto ");

   // }

    /**
     * @Route("/article/{page}")
     */
     public function read(){

          return new Response("L'article est Trouvé ");

    }

}