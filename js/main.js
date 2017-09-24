$(document).ready(function(){
    $.get("api/index.php", function(data){
            _.map(data,function (e, i) {
                $('section').append('<article><p>'+e+'</p></article>');
            });
        });
});