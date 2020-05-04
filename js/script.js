$(document).ready(function(){
    $('.email').click(function(){
        $get('emailForm.php', function(data) {
            alert("Action performed successfully");
        });
        return false;
    });
});