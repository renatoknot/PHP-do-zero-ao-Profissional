$(function(){
    $('#div').on('scroll', function(){//ao executar o scrool na pagina ele entra na função
        $(this).css('background-color', 'green')
        console.log("Scroolou ...")
    })

    $(window).on('resize', function(){ //ao mudar o tamanho da tela
        console.log('Mudou o tamanho da tela...')
    })
})