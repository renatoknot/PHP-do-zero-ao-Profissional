var valor = $('#algo').html()
$.trim(valor)// retirou os espacos em branco de antes e depois de dentro do elemento
valor = $.trim(valor)

// $('li').each(function(){
//     alert($(this).html()) //executa a funcao em cada item
// })

var nome= 'Renato';
console.log($.type(nome))// retorna o tipo de uma variavel

var idade = 31
$.isNumeric(idade)// verifica se a variavel e numerica e retorna true ou false 
console.log($.isNumeric(idade))