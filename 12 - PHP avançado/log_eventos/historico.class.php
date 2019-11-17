<?
    class Historico {
        private $pdo;
        public function __construct()
        {
           try {
            $this->pdo = new PDO("mysql:dbname=projeto_logeventos;host=localhost;charset=utf8","root","");
           } catch(PDOException $e){
                echo "Erro: ".$e->getMessage() ;
           }
        }

        public function registrar($acao) {
            $ip = $_SERVER['REMOTE_ADDR'];

            $sql = "INSERT INTO historico SET ip = :ip, data_acao = NOW(), acao = :acao";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":ip", $ip);
            $sql->bindValue(':acao', $acao);
            $sql->execute();

        }
    }

?>