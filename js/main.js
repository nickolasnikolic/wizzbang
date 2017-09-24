$(document).ready(function(){
    $.get("api/index.php", function(data){
            _.map(data.wizz,function (i) {
                console.log(i);
                $('section').append('<article><p>Hi</p></article>');
            });
        });
});