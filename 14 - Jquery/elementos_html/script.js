$(function(){
    $('button')//seleciona todas as tags informadas ex:button
    $('#btn1') //seleciona o elemento de id btn1
    $('.test') // seleciona todos os elementos de class test
    $('li.botao') //seleciona a tag li que possui a classe botao
    $('.lista2 li.botao') // seleciona a li com classe botao que esta dentro da ul de classe lista2

    if($('.botao').length > 0){
        console.log('teste')
        console.log($('.botao').length)
    }

    //salvando o item em uma variavel
    var itemqueeuquero = $('.lista2 li.botao');
})