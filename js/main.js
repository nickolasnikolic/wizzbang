$(document).ready(function(){
    $.get("api/index.php", function(data){
            var aLinks = data.wizz;

            _.each(aLinks,function (i) {
                console.log(i);
                $('section').append('<article>'+ i + '</article>');
            });
        });
});