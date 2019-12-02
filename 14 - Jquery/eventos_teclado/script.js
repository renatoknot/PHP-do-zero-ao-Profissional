$(function(){
    // $('#nome').on('keydown', function(){//quando aperta a tecla do teclado , de acordo com a doc tbm pode ser utilizada dessa forma \/
    // console.log('Uma tecla foi apertada') //$( "#target" ).keydown(function() {
    //                                           //alert( "Handler for .keydown() called." );     keyup tamvbem a mesma coisa
    //                                         //})
    // }) 
    // $('#nome').on('keyup', function(e){//quando solta a tecla do teclado
    //     console.log(e.keyCode)//saber qual tecla foi apertada,cada tecla a saida e um cod
    //     console.log('Uma tecla foi soltada')
    //     if(e.keyCode == 68){//cod da letra D
    //         console.log('Apertou D')
    //     }
    // }) 


    
    //sitema de chat no console.log
    $('#form').on('submit', function(e){
        e.preventDefault();//previne que o form seja enviado atualizando a pagina
     })
    $('#nome').keyup(function(e){
        if(e.keyCode ==13){
            var txt = $(this).val()
            console.log(txt)
            $(this).val('')
        }
    })

})