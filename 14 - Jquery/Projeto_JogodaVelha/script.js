var vez = 'o';

function atualizarPlacar(){
    if(vez == 'o'){
        $('.placar img').attr('src', 'o.png')
    }else{
        $('.placar img').attr('src', 'x.png')
    }
}

function verificarCampeao(){
    var a1 = $('.a1').attr('data-marcado')
    var a2 = $('.a2').attr('data-marcado')
    var a3 = $('.a3').attr('data-marcado')

    var b1 = $('.b1').attr('data-marcado')
    var b2 = $('.b2').attr('data-marcado')
    var b3 = $('.b3').attr('data-marcado')

    var c1 = $('.c1').attr('data-marcado')
    var c2 = $('.c2').attr('data-marcado')
    var c3 = $('.c3').attr('data-marcado')

    var ganhador = ''

    for(var i = 0;i <= 1;i++){
        if(i == 0){
            var op = 'o'
        }else {
            var op = 'x'
        }

        if(a1 == op && b1 == op && c1 == op){//Verificação na Primeira coluna na vertical
            ganhador = op
        }
        else if(a2 == op && b2 == op && c2 == op){//Verificação na Segunda coluna na vertical
            ganhador = op
        }
        else if(a3 == op && b3 == op && c3 == op){//Verificação na Terceira coluna na vertical
            ganhador = op
        }
        else if(a1 == op && a2 == op && a3 == op){//Verificação na Primeira linha na horizontal
            ganhador = op
        }
        else if(b1 == op && b2 == op && b3 == op){//Verificação na Segunda linha na horizontal
            ganhador = op
        }
        else if(c1 == op && c2 == op && c3 == op){//Verificação na Terceira linha na horizontal
            ganhador = op
        }
        else if(a1 == op && b2 == op && c3 == op){//Verificação na diagonal
            ganhador = op
        }
        else if(a3 == op && b2 == op && c1 == op){//Verificação na diagonal
            ganhador = op
        }
    }
    if(ganhador != ''){
        if (ganhador == 'o'){
            alert ('O ganhador foi: O')
        }else {
            alert ('O ganhador foi: X')
        }
        $('.area').html('')
        $('.area').attr('data-marcado', '')
    } else if(a1 != '' && a2 != '' && a3 != '' && b1 != '' && b2 != '' && b3 != '' && c1 != '' && c2 != '' && c3 != '') {
		alert("EMPATE!");
		$('.area').html('');
		$('.area').attr('data-marcado', '');
	}
}


$(function(){
    atualizarPlacar()

    $('.area').on('click', function(){
        if($(this).find('img').length == 0){
            if(vez == 'o'){
                $(this).html("<img src='o.png' border='0' height='50'>")
                $(this).attr('data-marcado', 'o')
                vez = 'x'
            }else{
                $(this).html("<img src='x.png' border='0' height='50'>")
                $(this).attr('data-marcado', 'x')
                vez = 'o'
            }
            atualizarPlacar()
            verificarCampeao()
        }
    })
})