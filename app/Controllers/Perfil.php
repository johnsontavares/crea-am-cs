<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;

  
class Perfil extends Controller
{
    public function index()
    {
        $session = session();
        echo "Olá : ".$session->get('nome');

        // <h1> Johnson </h1>
    }
}