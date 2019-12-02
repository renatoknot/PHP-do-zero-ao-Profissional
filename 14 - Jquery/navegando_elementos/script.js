//selecionando uma div sem identificação(class ou id)
$('.filha').parent()//seleciona a sua tag 'pai'

//selecionando de cima para baixo
$('.site').find('.filha')

//da classe irmao, encontrar a classe topo
$('.irmao').closest('.topo')

//achando a classe conteudo
$('.irmao').closest('.site').find('.conteudo')

//dica: usar closest no lugar de parent, para caso a estrutura do html mude