<?php
namespace App\Models;

use App\Config\Database;
use PDO;

class UserModel
{
    private $pdo;

    public function __construct(Database $db)
    {
        $this->pdo = $db->getConnection();
    }

    public function getUser()
    {
      
        $stmt = $this->pdo->prepare('SELECT * FROM user');
        return $stmt->fetch();
        
    }
}