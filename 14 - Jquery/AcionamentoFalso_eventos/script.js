$(function(){
    // $('button').on('click', function(){
    //     alert('clicou!')
    // })
    // $('button').trigger('click')//aciona o alerta sem clicar no botao

    $('#btn1').on('click', function(){
        $('#btn2').trigger('click') // "ativa o gatilho"
    })                                  //invertendo a ordem dos botoes

    $('#btn2').on('click', function(){
        alert('clicou no botao2')
    })
})