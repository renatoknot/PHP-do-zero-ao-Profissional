function verificar() {
    let n1 = document.getElementById('n1').innerHTML;
    let n2 = document.getElementById('n2').value;

    if (n1==n2) {
        alert('Você acertou o número!')
    } else {
        alert('Você errou!')
    }
    resetar();
}

function resetar() {
    document.getElementById('n2').value ='';
     let r = Math.floor(Math.random()*100);
     document.getElementById('n1').innerHTML = r;
}