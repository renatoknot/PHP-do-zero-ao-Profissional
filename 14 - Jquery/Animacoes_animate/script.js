$(function(){
    $('.botao').on('click', function(){//propriedade css em json
        $('.div').animate({
            'margin-left': 100,
            'margin-top':20,
            'background-color': '#FF0000',
            'width': 500,
            'border-radius': 75
        }, 1000)                       //tempo de duração para completar a animacao em MS
    })
})