<?php
    abstract class Animal {
        private $nome;
        private $idade;

        abstract protected function andar(); //funcção absctract é sempre protected
        public function setNome($n){
            $this->nome = $n;
        }
        public function getNome(){
            return $this->nome;
        }
    }

    class Cavalo extends Animal {
        private $quantidade_de_patas;
        private $tipo_de_pelo;

        public function andar(){ // o metodo abstrato na classe pai, 
            //força que todas as heranças tenham esse metodo 
            //implementado em suas classes filhas

        }
    }
    
    $cavalo = new Cavalo;
?>