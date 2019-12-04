$(function(){
    // $('.div').slideUp();//desliza para cima
    // $('.div').slideDown()
    $('.div').hide()
                                            //parametros 'slow' - ele desliza mais devagar
    $('.botao').on('click', function(){
        $('.div').slideToggle()// alternas entre os 2 acima - 
    })

    $('.hellobar').on('click', function(){
        $(this).slideUp()
    })
})