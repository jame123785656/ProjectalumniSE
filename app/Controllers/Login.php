<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller {
    public function index() {
        // include helper form
        helper(['form']);
        echo view('login');
    }

    public function auth() {
        $session = session();
        $model = new UserModel();
        $id = $this->request->getVar('id');
        $password = $this->request->getVar('password');
        $data = $model->where('user_id', $id)->first();
        if ($data) {
            $pass = $data['passwords'];
            $verify_password = password_verify($password, $pass);
            if ($verify_password) {
                $ses_data = [
                    'user_id' => $data['user_id'],
                    'user_fname' => $data['user_fname'],
                    'user_lname' => $data['user_lname'],
                    'group' => $data['group'],
                    'school_year' => $data['school_year'],
                    'day' => $data['day'],
                    'month' => $data['month'],
                    'year' => $data['year'],
                    'sakha' => $data['sakha'],
                    'kana' => $data['kana'],
                    'address' => $data['address'],
                    'province' => $data['province'],
                    'post_code' => $data['post_code'],
                    'em' => $data['em'],
                    'phones' => $data['phones'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/userindex');
            } else {
                $session->setFlashdata('msg', 'Wrong password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'id not found');
            return redirect()->to('/login');
        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}