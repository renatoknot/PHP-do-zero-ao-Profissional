<?php
    class Animal {
        public $nome; // teste
        private $idade;
    }

    class Cavalo extends Animal {
        private $quantidade_de_patas;
        private $tipo_de_pelo;
    }

    class Gato extends Animal {
        private $quantidade_de_patas;
        private $miado;
    }

    $cavalo = new Animal;
    $cavalo->nome = "Cavalo 1";

    echo "O nome do meu cavalo é: ".$cavalo->nome;
?>