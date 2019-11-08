<?
    class Usuarios {

        private $db;

        public function __construct() {
            try {
                $this->db = new PDO("mysql:dbname=blog;charset=utf8;host=localhost",'root','');
            } catch(PDOException $e) {
                echo "Falha: ".$e->getMessage();
            }
        }

        public function selecionar($id) {
            // $sql = "SELECT * FROM usuarios WHERE id = :id";
            $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
            $sql->bindValue(':id', $id); //forma 1 pega o valor da variavel neste momento
            $sql->execute();

            $array = array();
            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
            return $array;
        }

        public function inserir($nome, $email, $senha) {
            $sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email= :email, senha = :senha");
            $sql->bindParam(':nome', $nome); //forma 2 pega o valor da variavel em qualquer momento antes do execute()
            $sql->bindParam(':email', $email);
            $sql->bindValue(':senha', md5($senha));
            $sql->execute();
        }

        public function atualizar($nome,$email, $senha, $id) {
            $sql = $this->db->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
            $sql->execute(array($nome, $email, $senha, $id)); //3 forma, troca as ? por um array de variaveis
        }

        public function excluir($id){   
            $sql = $this->db->prepare("DELETE FROM usuarios WHERE id = ?");
            $sql->bindValue(1, $id);
            $sql->execute();
        }
    }