<?php

namespace App\Controllers;

use App\Models\TasksModel;
use App\Models\UsersModel;

class Adminindex extends BaseController
{
    protected $helpers = ["cookie", "url"];

    public function index()
    {
        //if(get_cookie("user_id")){
            $user_id = 1;
            $model_user = new UsersModel();
            $username = $model_user->where('user_id', $user_id)->first()["name"];
            $db = \Config\Database::connect();
            $builder = $db->table("tasks");
            $builder->select("*");
            $builder->join("users", "users.user_id=tasks.user_id");
            $builder->where("manager_id", $user_id);
            $query = $builder->get();
            $tasks = $query->getResultArray();
            $data = array(
                "heading" => "Admin Index Sayfası",
                "username" => $username,
                "tasks" => $tasks
            );
            echo view('templates/index_header', $data);
            return view('admin_index');
            echo view('templates/admin_index_footer');
        //}else
        //    redirect()->to(site_url());
    }
}
