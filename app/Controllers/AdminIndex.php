<?php

namespace App\Controllers;

class AdminIndex extends BaseController
{
    public function index()
    {
        $data = array(
            $heading = "Admin Index Sayfası"
        );
        echo view('templates/index_header', $data);
        return view('adminIndex');
        echo view('templates/index_footer');
    }
}