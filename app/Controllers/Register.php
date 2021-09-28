<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller {
    public function index() {
        // include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function save() {
        // include helper form
        helper(['form']);
        // set rules validation form
        $rules = [
            'id'=> 'required|min_length[3]|max_length[20]',
            'fname' => 'required|min_length[3]|max_length[20]',
            'lname' => 'required|min_length[3]|max_length[20]',
            'groups' => 'required|min_length[3]|max_length[20]',
            'school_years' => 'required|min_length[3]|max_length[20]',
            'days' => 'required|min_length[1]|max_length[2]',
            'months' => 'required|min_length[3]|max_length[20]',
            'years' => 'required|min_length[3]|max_length[20]',
            'addresss' => 'required|min_length[3]|max_length[100]',
            'provinces' => 'required|min_length[3]|max_length[20]',
            'post_codes' => 'required|min_length[3]|max_length[20]',
            'phone' => 'required|min_length[9]|max_length[10]',
            'emai' => 'required|min_length[20]|max_length[50]',
            'sakhas' => 'required|min_length[3]|max_length[50]',
            'kanas' => 'required|min_length[3]|max_length[50]',
            'password' => 'required|min_length[6]|max_length[200]',
            'confpassword' => 'matches[password]',
        ];
        if ($this->validate($rules)) {
            $model = new UserModel();
                
            $data = [
                'user_id' => $this->request->getVar('id'),
                'user_fname' => $this->request->getVar('fname'),
                'user_lname' => $this->request->getVar('lname'),
                'group' =>$this->request->getVar('groups'),
                'school_year' =>$this->request->getVar('school_years'),
                'day' =>$this->request->getVar('days'),
                'month' =>$this->request->getVar('months'),
                'year' =>$this->request->getVar('years'),
                'address' =>$this->request->getVar('addresss'),
                'province' =>$this->request->getVar('provinces'),
                'post_code' =>$this->request->getVar('post_codes'),
                'phones' =>$this->request->getVar('phone'),
                'em' =>$this->request->getVar('emai'),
                'sakha'=>$this->request->getVar('sakhas'),
                'kana'=>$this->request->getVar('kanas'),
                'passwords' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}