$(function(){
    // $('button').hover(function(){
    //     $(this).addClass('fundovermelho') // funcao é executada no hover
    // }, function(){
    //     $(this).removeClass('fundovermelho')//executada quando o mouse sai
    // })
    
    $('button').hover(function(){
        $(this).toggleClass('fundovermelho')//versao simplificada do cod acima
    })
})