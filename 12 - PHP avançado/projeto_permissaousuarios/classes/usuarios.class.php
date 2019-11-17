<?
    class Usuarios {
        private $pdo;
        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
        public function login($email, $senha){
            $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':email',$email);
            $sql->bindValue(':senha',md5($senha));
            
            $sql->execute();
            
        }
    }