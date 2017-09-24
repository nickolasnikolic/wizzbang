$(document).ready(function(){
    $.get("api/index.php", function(data){
            _.map(data,function (i) {
                $('section').append('<article><p>'+i+'</p></article>');
            });
        });
});