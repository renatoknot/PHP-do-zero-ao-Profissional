<?php
    interface Animal {
        public function andar(); //obriga a criar a função nas classes que a implementam
    //todas os metodos da interface devem ser publicos
    //e nao pode efetuar nenhuma configuração nela(deverao ser implementadas na classe filha)
    }

    class Cachorro implements Animal { // interface usa implements
        public function andar() {
            echo "estou andando...";
        }
    }

    $cachorro = new Cachorro;
    $cachorro->andar();
?>