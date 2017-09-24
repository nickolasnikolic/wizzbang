$(document).ready(function(){
    $.get("api/index.php")
        .then(function(data){
            $('body').innerText = data;
        });
});