$(function(){
    $('button').click(function(){
        // if($(this).hasClass('fundovermelho')){ //checa se tem a classe
        //     $(this).removeClass('fundovermelho') //remove a classe
        // } else {
        //     $(this).addClass('fundovermelho')//adiciona a classe
        // }


        //outra forma de fazer o cod acima
        // $(this).toggleClass('fundovermelho'); //mais limpo
    })
    $('button').mouseover(function(){ //quando o mouse fica em cima
        $(this).addClass('fundovermelho')
    })
    $('button').mouseout(function(){ //quando o mouse sai de cima
        $(this).removeClass('fundovermelho')
    })
})