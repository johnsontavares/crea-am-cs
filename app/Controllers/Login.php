<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    } 
  
    public function loginAuth()
    {
        $session = session();

        $userModel = new UserModel();

        $cpf = $this->request->getPost('cpf');
        $senha = $this->request->getPost('senha');
        
        $data = $userModel->where('cpf', $cpf)->first();

        if($data){
            $senha_hash = hash('sha256', $senha.md5($senha));
            if($senha_hash == $data['senha']) {
                $ses_data = [
                    'id' => $data['id'],
                    'nome' => $data['nome'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to('/dashboard');
            
            }else{
                $session->setFlashdata('msg', 'Senha incorreta ou conta inexistente.');
                return redirect()->to('/login');
            }

        }
    }
}