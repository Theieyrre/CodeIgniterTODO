<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    protected $helpers = ["cookie", "url"];

    public function index()
    {
        echo view('templates/header');
        return view('login');
        echo view('templates/footer');
    }

    public function login()
    {
        if($this->request->getMethod() == "post"){
            $model = new UsersModel();
            $user = $model->where('email', $_POST["email"])->where('password', $_POST["password"])->first();
            if($user){
                $user_id = $user['user_id'];
                set_cookie("user_id", $user_id);
                $manager_id = $user['manager_id'];
                if($manager_id == 0)
                    return redirect()->to("adminIndex");
                else
                    return redirect()->to("index");
            }else{
                echo "NO user";
            }
        }
    }
}
