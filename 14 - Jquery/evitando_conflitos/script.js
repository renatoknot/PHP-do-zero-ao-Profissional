//evitando conflito com outras bibliotecas que usam o atalho '$'

var $j = jQuery.noConflict();

$j(document).ready(function(){
    alert('Está funcionando!')
})

//Outra forma
jQuery(document).ready(function(){
    alert('Funcionando nativamente')
});