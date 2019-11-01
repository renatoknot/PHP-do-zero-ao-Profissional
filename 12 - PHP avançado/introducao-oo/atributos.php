<?
    class Cachorro {
        private $nome;
        private $idade;
        
        public function latir() {
            echo "Au au <br>";
        }
    }  
    
    $cachorro = new Cachorro;
    $cachorro->nome = "Lulu";

    class Post {
        private $titulo;
        private $data;
        private $corpo;
        private $comentarios;
    }
?>