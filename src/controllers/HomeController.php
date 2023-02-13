<?php

namespace src\controllers;

class HomeController extends Controller
{
    public function index()
    {
        $this->view('home', ['title' => 'Home', 'name' => 'Ssk']);
    }
}
