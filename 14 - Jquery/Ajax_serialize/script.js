$(function(){
    $('#form').on('submit', function(e){
        e.preventDefault();

        let txt = $(this).serialize();
        console.log(txt);
    })
})