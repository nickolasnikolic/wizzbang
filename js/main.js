$(document).ready(function(){
    $.get("api/index.php")
        .then(function(data){
            console.log(data);
        });
});