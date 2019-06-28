<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function inicio() {
        return view('inicio');
    }

    public function terminos() {
        return view('terminos');
    }
}