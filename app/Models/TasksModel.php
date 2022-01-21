<?php namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model
{
    protected $table = "tasks";
    protected $primaryKey ="user_id";

    protected $allowedFiles = ['user_id', 'task', 'is_done'];
}