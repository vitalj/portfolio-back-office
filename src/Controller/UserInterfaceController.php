<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserInterfaceController extends Controller
{
    /**
     * @Route("/user/interface", name="user_interface")
     */
    public function index()
    {
        return $this->render('user_interface/index.html.twig', [
            'controller_name' => 'UserInterfaceController',
        ]);
    }
}
