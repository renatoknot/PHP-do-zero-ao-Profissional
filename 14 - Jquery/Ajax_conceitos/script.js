$(function(){
    $('button').on('click', function(){//carregamento do conteudo do arquivo externo teste.html para o conteudo da div do index
        // $('.div').load('teste.html')  //metodo auxiliar, ainda não é o principal

        
        // $.get('teste.html', function(data){//ira requisitar o arquivo, o parametro é o resultado da requisicao
        //     $('.div').html(data) //inserindo o resultado na div
        // })

        $.post("teste.html", function(data){//mesma requisição so que via POST
            $('.div').html(data) //inserindo o resultado na div
        })
    })
})