(function($){
    //plugin para mudar a cor do link e retirar o underline/ e mudar a cor de fundo ao passar o mouse
    $.fn.mudarCor = function(cor){
        this.each(function(){
            $(this).css('color', cor).css('text-decoration', 'none')
            
            $(this).hover(function(){
                $(this).css('background-color', '#FF0000')
            }, function(){
                $(this).css('background-color', '#FFF')
            })
        })
        return this
    }


}(jQuery));