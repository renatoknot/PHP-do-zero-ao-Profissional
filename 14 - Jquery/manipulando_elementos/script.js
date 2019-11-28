$(function(){
    // $('#teste').html('Esse é <strong>Negrito</strong')//adiciona como html
    // $('#teste').text('Esse é <strong>Negrito</strong')//adiciona como string
    // $('#teste').attr('id', 'novoid')

    $('#teste').find('img').attr('width', 100)
    $('#teste').find('img').width(450)//outra forma de fazer o cod acima
    $('#teste').find('img').height(240)


    $('input').attr('value', 'Meu teste de inserção')
    $('input').val('Novo teste de inserção')// cod mais simplificado do cod acima
    
    
    $('input').after('<div>texto qualquer</div>')//insere apos o elemento
    $('input').before('<div>Nome:</div>')//add conteudo antes

    $('ul').append('<li>Item 5</li>')//insire o conteúdo especificado pelo parâmetro no final de cada elemento no conjunto de elementos correspondentes.
    $('ul').prepend('<li>Item 0</li>')//mesma coisa que o de cima, porém insere no inicio
})