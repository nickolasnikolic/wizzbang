$(document).ready(function(){
    $.get("api/index.php", function(data){
            var aLinks = data.wizz;

            _.map(aLinks,function (i) {
                console.log(i);
                $('section').append('<article>'+ document.createTextNode(i) + '</article>');
            });
        });
});