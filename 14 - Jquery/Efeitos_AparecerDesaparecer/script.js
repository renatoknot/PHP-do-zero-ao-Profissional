/*
$('.div').hide() //esconde o elemento
$('.div').show()//exibe o elemento na tela
*/

/*com parametros
$('.div').hide('slow')//desaparece lentamente
$('.div').show('fast')//aparece rapidamente
*/
// $('.div').toggle();//alterna (hide/show)

$('.botao').on('click', function(){
    $('.div').toggle('fast')//clicando no botao a div desaparece
})