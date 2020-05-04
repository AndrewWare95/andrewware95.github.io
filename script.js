$(document).ready(function(){
    $('.button').click(function(){
        var clickButton = $(this).val();
        var emailForm = 'emailForm.php',
        data = {
            'action' : clickButton
        };
        $.post(emailForm, data, function(response) {
            alert("Action performed successfully");
        });
    });
});