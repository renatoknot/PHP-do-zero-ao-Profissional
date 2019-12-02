function eventoDoBotao(e){
    e.preventDefault();
    alert(e.type)
}

$(function(){
    // $('#botao').on('click', function(e){
    //     e.preventDefault(); //previnir a ação padrao do objeto, que no caso é o envio do (submit) do form

    //     // let txt = $('#nome').val()
    //     // alert(txt)

    //     alert(e.type) //retorna "click"
    // })

    //outra forma
    $('#botao').on('clck', eventoDoBotao)
    $('#botao').on('mouseover', eventoDoBotao)
})

