$(function(){
    $('#senha').on('keyup', function(){
        let txt = $(this).val()
        var forca = 0

        // tem que ter letras, numeros, caracteres especiais, minimo de caracteres

        if(txt.length > 6){
            forca +=25
        }

        var reg = new RegExp(/[a-z]/i) //consulta se tem letras
        if(reg.test(txt)){
            forca +=25
        }

        var reg = new RegExp(/[0-9]/i) //consulta se tem numeros
        if(reg.test(txt)){
            forca +=25
        }

        var reg = new RegExp(/[^a-z0-9]/i) //consulta se tem caracteres especiais(excluindo numeros e letras)
        if(reg.test(txt)){
            forca +=25
        }

        if(forca>=75){
            var aceita ='Aceita'
        }else{
            var aceita = 'Não aceita'
        }

        $('#forca').html('Força: '+forca+' ('+txt+') - '+aceita)
    })
})