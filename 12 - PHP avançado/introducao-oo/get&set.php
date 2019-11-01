<?
    class Post {
        private $titulo;
        private $data;
        private $corpo;
		private $comentarios;
		
		public function getTitulo() {
			return $this->titulo;
		}
		// GET e SET são importantes para fazer validações antes de 
		// definir um atributo como por ex abaixo, so irá inserir 
		// se for uma string
		public function setTitulo($t){
			if(is_string($t)) {
				$this->titulo= $t;
			}
		}
	}

	$post = new Post;

	$post->setTitulo("Título da postagem");

	echo "Titulo: ".$post->getTitulo();
?>