function validar() {
    let valor = document.getElementById('numero').value;
    
    if (valor.length>2) {
        alert('Digite apenas 2 algarismos!');
        return false;
    } else {
        return true;
    }
}