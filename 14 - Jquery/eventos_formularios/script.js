$(function(){
    // $('#form').on('submit', function(e){
    //     e.preventDefault();//previne que o form seja enviado atualizando a pagina

    //     console.log('O formulário foi enviado!')
    // })

    // $('#nome').on('select', function(){//entra na função ao selecionar algum campo do texto
    //     console.log('Algo foi selecionado')
    // })

    $('#nome, #email').on('focus',function(){//ao focar no campo  
        $(this).addClass('focado')  //adicionando mais de um elemento, so separar por virgula
    })
    $('#nome, #email').on('blur',function(){//ao desfocar o campo
        $(this).removeClass('focado')
    })

    $('#idade').on('change', function(){ // change, ao mudar a opção no select
        console.log($(this).val())
    })
})