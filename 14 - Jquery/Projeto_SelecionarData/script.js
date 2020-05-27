$(function(){
    var horaescolhaCampo
    $('input').on('focus', function(){
        var pos = $(this).offset()//retorna um array com 2 propriedades top e left
        var width = $(this).width()//pega a largura do campo

        $('.horaescolha').css('left', pos.left +width+5)
        $('.horaescolha').css('top', pos.top)
        $('.horaescolha').show()

        horaescolhaCampo = $(this)
    })
    $('input').on('blur', function(){
        setTimeout(function(){
            $('.horaescolha').hide()
        }, 200)//em ms
    })

    $('.horaescolha button').on('click', function(){
        var hora = $(this).html()
        horaescolhaCampo.val(hora)
    })
})