<?
    class Post {
        private $titulo;
        private $data;
        private $corpo;
        private $comentarios;
        private $qtdcomentarios;
        
       public function getTitulo() {
			return $this->titulo;
		}
		
		public function setTitulo($t){
			if(is_string($t)) {
				$this->titulo= $t;
			}
        }
        private function contarComentarios() {
            $this->qtdcomentarios = count($this->comentarios);
        }

        public function addComentario($msg){
            $this->comentarios[] = $msg;
            $this->contarComentarios();
        }

        public function getQuantosComentarios(){
            return $this->qtdcomentarios;
        }
    }
        
    $post = new Post();

    $post->addComentario("Teste1");
    $post->addComentario("Teste2");
    $post->addComentario("Teste3");
    $post->addComentario("Teste4");
    echo "Quantidade de comentarios: ".$post->getQuantosComentarios();
?>