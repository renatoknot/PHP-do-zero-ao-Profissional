$(function(){
    $('#form').on('submit', function(e){
        e.preventDefault()

        let txt = $(this).serialize();
        // console.log(txt)

        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: txt,
            dataType: 'json',
            success:function(json){
                // console.log(json)
                // alert('Meu nome é: '+json.nome);
                // alert('Nome é: '+json.nome+' e tem '+json.qtd_nome+' caracteres')
                console.log(json.status)
            }
        })
    })
})