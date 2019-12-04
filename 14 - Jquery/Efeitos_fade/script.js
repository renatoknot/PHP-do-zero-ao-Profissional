//aparecer e desaparecer sem o show/hide

// $('.div').fadeOut() //desaparece
// $('.div').fadeIn() //aparece

// $('.div').fadeToggle() //alterna entre os 2 acima

$(function(){
    $('.botao').on('click', function(){
        $('.div').fadeToggle()         //parece ser bom para menus
    })
})