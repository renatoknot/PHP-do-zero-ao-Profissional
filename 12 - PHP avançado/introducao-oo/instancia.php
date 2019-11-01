<?
    class Cachorro {
        public function latir() {
            echo "Au au <br>";
        }
    }


    $lula = new Cachorro;

    $lula->latir();

    $dudu = new Cachorro;
    $dudu->latir(); 
?>