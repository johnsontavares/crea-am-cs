<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class UserModel extends Model{

    protected $DBGroup = 'userdb';
    protected $table = 'usuario';
    
    protected $allowedFields = [
        'nome',
        'email',
        'cpf',
        'senha'
    ];

}