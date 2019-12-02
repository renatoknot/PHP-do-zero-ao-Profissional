$(function(){
    $('button').on('click', function(){ //pode usar o bind tambem
        alert('Clicou')
    })

    //$('button').unbind('click') - Remove o evento
    $('button').off('click') /// tambem remove o evento

})