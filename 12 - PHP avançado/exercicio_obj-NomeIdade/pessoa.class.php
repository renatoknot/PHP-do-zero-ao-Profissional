<?
    class Pessoa{
        private $nome;
        private $nascimento;

        public function __construct($nome, $nascimento)
        {
            $this->nome = $nome;
            $this->nascimento = $nascimento;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getNascimento(){
            return $this->nascimento;
        }


       /* kkkkk meu codigo ficou horrivel (gigante)
        public function getIdade(){
            $data = $this->getNascimento();
            $data = str_replace('/', '-', $data);
            $data = date('Y-m-d', strtotime($data));

            $anonascimento = explode('-', $data);
            $anonascimento = $anonascimento[0];
            $anoatual = date('Y');

            return $anoatual - $anonascimento;
            
        }
        */


        /*codigo do professor*/

        public function getIdade() {
            $data = explode("/", $this->nascimento);
    
            $d1 = time();
            $d2 = strtotime($data[2].'-'.$data[1].'-'.$data[0]);
    
            $c = $d1 - $d2;
    
            $ano = date('Y', $c)- 1970;
    
            return $ano;
        }
        
    }