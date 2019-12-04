$(function(){
    $('#btn').on('click', function(){
        $('.div').animate({
            'margin-left': 500
        }, 2000)
    })
    $('#btn2').on('click', function(){//botao para parar a animacao
        $('.div').stop() //para a animacao
    })
})