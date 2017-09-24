$(document).ready(function(){
    $.get("api/index.php", function(data){
            $.each(data.wizz,function(i){$('section').innerHTML(data.wizz[i])});
        });
});