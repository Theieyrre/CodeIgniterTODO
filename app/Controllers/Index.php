<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function index()
    {
        $data = array(
            $heading = "TODO Listeniz",
            $tasks = array()
        );
        echo view('templates/index_header', $data);
        return view('index', $tasks);
        echo view('templates/index_footer');
    }
}
