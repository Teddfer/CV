<?php

namespace App\Controllers;

use Jenssegers\Blade\Blade;
use Libs\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->loadBlade();
    }
    public function index()
    {
        //echo "Página de Inicio", "</br>";
        //require_once __DIR__ .  '/../views/home/index.php';
        echo $this->blade->make('home.index', ['name' => 'Teddy'])->render();
    }

    public function inicio()
    {
        //echo "Página de Inicio", "</br>";
        //require_once __DIR__ .  '/../views/home/index.php';
        echo $this->blade->make('home.inicio', ['name' => 'Teddy'])->render();
    }

    public function habilidades()
    {
        //echo "Página de Inicio", "</br>";
        //require_once __DIR__ .  '/../views/home/index.php';
        echo $this->blade->make('home.habilidades', ['name' => 'Teddy'])->render();
    }

    public function experiencia()
    {
        //echo "Página de Inicio", "</br>";
        //require_once __DIR__ .  '/../views/home/index.php';
        echo $this->blade->make('home.experiencia', ['name' => 'Teddy'])->render();
    }

    public function proyectos()
    {
        //echo "Página de Inicio", "</br>";
        //require_once __DIR__ .  '/../views/home/index.php';
        echo $this->blade->make('home.proyectos', ['name' => 'Teddy'])->render();
    }

    public function acerca()
    {
        //echo "Página de Inicio", "</br>";
        //require_once __DIR__ .  '/../views/home/index.php';
        echo $this->blade->make('home.acerca', ['name' => 'Teddy'])->render();
    }
}
