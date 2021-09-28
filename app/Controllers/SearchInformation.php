<?php
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class SearchInformation extends Controller {
    public function search() {

        $UserModel = new UserModel();
        $data['users'] = $UserModel->orderBy('ID', 'DESC')->findAll();
        return view('searchInformation', $data);
    }
}






