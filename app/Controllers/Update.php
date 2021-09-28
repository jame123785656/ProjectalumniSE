<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Update extends Controller {
    public function index() {
        $data = [];
        echo view('update',$data);
    }
    public function update() {
        $model = new UserModel();
        $session = session();
        $ID = $session->get('ID');
        $data = [
            'user_fname' => $this->request->getVar('user_fname'),
            'user_lname' => $this->request->getVar('user_lname'),
            'user_id' => $this->request->getVar('user_id'),
            'group' => $this->request->getVar('group'),
            'school_year' => $this->request->getVar('school_year'),
            'day' => $this->request->getVar('day'),
            'month' => $this->request->getVar('month'),
            'year' => $this->request->getVar('year'),
            'address' => $this->request->getVar('address'),
            'province' => $this->request->getVar('province'),
            'post_code' => $this->request->getVar('post_code'),
            'phones' => $this->request->getVar('phones'),
            'em' => $this->request->getVar('em'),
            'sakha' => $this->request->getVar('sakha'),
            'kana' => $this->request->getVar('kana'),
            'passwords' => $this->request->getVar('passwords'),
        ];
        if( $model->Where('ID',$ID)->update($ID,$data)){
            $session->set($data);

       return redirect()->to('/profile');
        }
    }
}
