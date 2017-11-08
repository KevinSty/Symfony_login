<?php

/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 08/11/17
 * Time: 08:53
 */
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends Controller {

    /**
     * @Route("/", name="app_home_index")
     */
    public function index(){
        return $this->render("homePage.html.twig");
    }
}