$(document).ready(function(){
    $.get("api/index.php", function(data){
            _.each(data,function (i) {
                $('section').append('<article><p>'+i+'</p></article>');
            });
        });
});