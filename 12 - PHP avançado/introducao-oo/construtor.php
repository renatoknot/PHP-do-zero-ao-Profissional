<?
    class Post {
        private $titulo;
        private $data;
        private $corpo;
		private $comentarios;
        
        //construtor
        public function __construct($t,$c) {
            $this->setTitulo($t);
            $this->setCorpo($c);
        }


		public function getTitulo() {
			return $this->titulo;
		}
		
		public function setTitulo($t){
			if(is_string($t)) {
				$this->titulo= $t;
			}
        }
        public function getCorpo() {
			return $this->corpo;
		}
        public function setCorpo($c){
			$this->corpo = $c;
		}
	}

    $post = new Post("Titulo qualquer!!","Corpo da minha postagem !!");
    echo "titulo: ".$post->getTitulo()." - Corpo da msg: ".$post->getCorpo();
?>