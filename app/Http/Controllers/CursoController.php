<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenido a los cursos";
    }

    public function create(){
        return "Crea tu curso";
    }

    public function show($curso){
        return "Estas en el curso {$curso}";
    }

    public function edit(){
        return "Edita tu curso";
    }
}
