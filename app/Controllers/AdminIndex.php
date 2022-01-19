<?php

namespace App\Controllers;

class AdminIndex extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        return view('adminIndex');
        echo view('templates/footer');
    }
}
