<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['ID','user_id','user_fname','user_lname','group',
    'school_year','day','month','year','sakha','kana','address','province',
    'post_code','em','phones','passwords','images','sakha','kana'];
   
}