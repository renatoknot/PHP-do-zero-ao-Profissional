function acao(){
    document.write("Executou.... <br>");
}

let timer = setInterval(acao, 2000); // primeiro parametro - qual acao? //segundo parametro de quanto em quanto tempo (em milisegundos)
/*para parar o setInterval neste caso
 clearInterval(timer) << passando a variavel*/





/*setTimeout(acao, 2000);*/ //mesmos parametros do setInterval, porem executa uma unica vez