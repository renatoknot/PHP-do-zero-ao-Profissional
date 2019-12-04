$(function(){
    $('#btn').on('click', function(){
        $('.div').animate({
            'margin-left': '-=50'   //vai adicionando 50px de mL a cada clique
        }, 500)
    })
    $('#btn2').on('click', function(){
        $('.div').animate({
            'margin-left': '+=50'   
        }, 500)
    })
})