function Animal(){
    this.raca ="Cão";
    this.nome="Lulu";
    this.idade = 200;
    this.peso= 10;

    this.fazerXixi = function() {
        console.log("Xiiiii...")
    }

    this.comer = function(kg) {
        for(var i=0; i< kg; i++){
            this.mastigar(i);
        }
        console.log("Hummm..")
        this.peso += kg
    }

    this.mastigar = function(i){
        console.log(i+" - Nhoc...");
    }
}

var lulu = new Animal();
lulu.raca = "Gato"
lulu.comer(10)


var xuxu = new Animal();
xuxu.nome=  "Xuxu"