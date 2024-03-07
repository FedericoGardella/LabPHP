<?php

namespace App\Controllers;

class ExampleController extends BaseController
{
    public function index()
    {
        return view('example');
        // print_r($this->session_abort());
        //echo "<h1>Hola Mundo</h1>";//ES SOLO UN EJEMPLO, NO SE DEBE USAR ECHO EN LOS CONTROLADORES (sirve para debuggear). Para algo existen las vistas.
    }

    public function show($id)
    {
        echo "<h1>$id</h1>";
    }

    public function show2($id,$nombre)
    {
        echo "<h1>$id , $nombre</h1>";
    }
}
