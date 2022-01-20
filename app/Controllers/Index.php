<?php

namespace App\Controllers;

class Index extends BaseController
{
    protected $helpers = ["cookie", "url"];

    public function index()
    {
        if(get_cookie("user_id")){
            $data = array(
                $heading = "TODO Listeniz",
                $tasks = array()
            );
            echo view('templates/index_header', $data);
            return view('index', $tasks);
            echo view('templates/index_footer');
        }else
            return redirect()->to("login");
    }
}
