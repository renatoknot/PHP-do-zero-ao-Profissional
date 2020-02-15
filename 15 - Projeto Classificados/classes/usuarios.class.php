<?php
    class Usuarios {

        public function getTotalUsuarios(){
            global $pdo;

            $sql = $pdo->query("SELECT COUNT(*) as c FROM usuarios;");
            $total = $sql->fetch();
            
            return $total['c'];
        }
      
        public function cadastrar($nome, $email, $senha, $telefone){
            global $pdo;

            $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
            $sql->bindValue(':email',$email);//checa se ja existe usuario cadastrado com esse email
            $sql->execute();

            if($sql->rowCount() == 0 ){
                
                $sql = $pdo->prepare("INSERT into usuarios set nome = :nome, email = :email, senha = :senha, telefone = :telefone");
                $sql->bindValue(':nome',$nome);
                $sql->bindValue(':email',$email);
                $sql->bindValue(':senha',md5($senha));
                $sql->bindValue(':telefone',$telefone);
                $sql->execute();

                return true;

            } else{
                return false;
            }
        }

        public function login($email, $senha){
            global $pdo;

            $sql = $pdo->prepare("SELECT id, nome FROM usuarios WHERE email =:email AND senha = :senha");
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', $senha);
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
                $_SESSION['cLogin'] = $dado['id'];
                $_SESSION['name'] = $dado['nome'];
                return true;
            } else {
                return false;
            }
        }
    }
?>