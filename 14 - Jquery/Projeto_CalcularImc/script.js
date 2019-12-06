/**
 * IMC = peso / altura² 
 * 
 * 
 */

$(function(){
    $('button').on('click', function(){
        var altura = $('#altura').val()
        altura = altura.replace(',', '.')

        var peso = $('#peso').val()
        peso = peso.replace(',', '.')

        var imc = peso / (altura*altura)
        imc = imc.toFixed(2)

        if(imc < 16){
            var resultado = 'Baixo peso muito grave'
        }else if(imc>= 16 && imc <17){
            var resultado = 'Baixo peso grave'
        } else if (imc>= 17 && imc <18.50){
            var resultado = 'Baixo peso'
        }else if(imc>= 18.50 && imc <25){
            var resultado = 'Peso normal'
        }else if(imc>= 25 && imc <30){
            var resultado = 'Sobrepeso'
        }else if (imc>= 30 && imc <35){
            var resultado = 'Obesidade grau 1'
        }else if (imc>= 35 && imc <40){
            var resultado = 'Obesidade grau 2'
        }else if (imc>= 40){
            var resultado = 'Obesidade Mórbida'
        }

        $('#resultado').html("Seu IMC é: "+imc+" KG/m² e seu status é: "+resultado)

    })
})