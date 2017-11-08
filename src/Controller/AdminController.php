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

class AdminController extends Controller {

    /**
     * @Route("/admin/", name="app_admin_index")
     */
    public function index(){
        return $this->render("admin.html.twig");
    }
}