$(function(){
    $('.botao').on('click', function(){
        $('.div').animate({
            'border-radius':75
        },{
            duration:1500,
            step:function(){//funcao a ser executada em cada passo
                console.log('Nova etapa')
            },
            complete:function(){//funcao a executar assim que completar
                console.log('Animção finalizada!')
            },
            start:function(){//funcao a exeutar ao iniciar
                console.log('Animação Começou!')
            }
        })
    })
})