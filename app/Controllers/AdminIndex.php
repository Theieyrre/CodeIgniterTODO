<?php

namespace App\Controllers;

class Adminindex extends BaseController
{
    protected $helpers = ["cookie", "url"];

    public function index()
    {
        if(get_cookie("user_id")){
            $data = array(
                $heading = "Admin Index Sayfası"
            );
            echo view('templates/index_header', $data);
            return view('admin_index');
            echo view('templates/index_footer');
        }else
            redirect()->to(site_url());
    }
}
