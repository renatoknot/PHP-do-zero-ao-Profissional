(function($){
    //plugin para mostrar o link do lado do nome do site
    $.fn.showRealLink = function(){
        this.each(function(){
            let link = $(this).attr('href')
            $(this).append(' ('+link+') ')
        })
        return this;
    }

}(jQuery));