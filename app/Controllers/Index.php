<?php

namespace App\Controllers;

use App\Models\TasksModel;
use App\Models\UsersModel;

class Index extends BaseController
{
    protected $helpers = ["cookie", "url"];

    public function index()
    {
        //if(get_cookie("user_id")){
            //$user_id = get_cookie("user_id");
            //Test için
            $user_id = 4;
            $model_user = new UsersModel();
            $username = $model_user->where('user_id', $user_id)->first()["name"];
            $model_tasks = new TasksModel();
            $tasks = $model_tasks->where('user_id', $user_id)->findAll();
            $data = array(
                'heading' => "TODO Listeniz",
                'username' => $username,
                'tasks' => $tasks 
            );
            echo view('templates/index_header', $data);
            echo view('index');
            echo view('templates/index_footer');
        //}else
        //    return redirect()->to("login");
    }

    public function update()
    {
        if($this->request->getMethod() == "post"){
            $model = new TasksModel();
            
        }
    }
}
