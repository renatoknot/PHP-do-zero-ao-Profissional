<?php
    class Animal {
        public function getNome() {
            echo "getNome da classe Animal";
        }
        public function testar(){
            echo"Testado!";
        }
    }

    class Cachorro extends Animal { 
        public function getNome() {
            echo "getNome da classe Cachorro";
            $this->testar();
        }
    }
    // pelo que entendi no polimorfismo quando os metodos sao iguais, o metodo abaixo sobrescreve o de cima
    $cachorro = new Cachorro();
    $cachorro->getNome();
?>