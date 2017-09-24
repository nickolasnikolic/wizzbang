$(document).ready(function(){
    $.get("api/index.php", function(data){
            console.log('here');
            console.log(data);
        });
});