<?php
/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 08/11/17
 * Time: 10:57
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller{

    /**
     * @Route("/login/", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authUtils){
        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();

        return $this->render("homePage.html.twig");
    }
}