$(function(){
    $('#form').on('submit', function(e){
        e.preventDefault();

        let txt = $(this).serialize();
        console.log(txt);

        $.ajax({ //1º Parametro - Json
            type: 'POST',
            url: 'ajax.php', //para qual endereço irá enviar
            data: txt,
            success: function(resultado){ //função para caso seja bem sucedido, parametro é o retorno da função
                console.log(resultado)
                $('.div').html("Resultado: "+resultado)
            },
            error: function(){//função caso de algum erro
                alert('Ocorreu um erro.')
            }
        })
    })
})