<?php

/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 08/11/17
 * Time: 08:54
 */
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class UserController extends Controller {

    /**
     * @Route("/user/", name="app_user_index")
     */
    public function index(){
        return $this->render("user.html.twig");
    }
}