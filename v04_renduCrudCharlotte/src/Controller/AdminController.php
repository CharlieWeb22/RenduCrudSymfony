<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/admin", name="admin_")
     */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * Liste des utilisateurs du site
     * @Route("/utilisateurs",name="utilisateurs")
     */
    public function usersList(UserRepository $users){
        return $this->render("admin/user.html.twig",[
            'users' => $users->findAll()
        ]);
    }
}
