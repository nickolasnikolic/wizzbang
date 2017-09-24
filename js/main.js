$(document).ready(function(){
    $.get("api/index.php", function(data){
            var aLinks = data.wizz;

            _.each(aLinks,function (i) {
                $('section').append('<article>').innerHTML(i);
            });
        });
});