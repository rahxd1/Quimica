// Login Form

$(function() {
    var button = $('#loginButton');
    var box = $('#loginBox');
    var form = $('#loginForm');
    button.removeAttr('href');
    button.mouseup(function(login) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(login) {
        if(!($(login.target).parent('#loginButton').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
});


function ingresa(){

    cod=document.getElementById('codigo').value;
    pass=document.getElementById('pass').value;

    document.loginForm.method='GET';
    document.loginForm.action='valida.php';
    document.loginForm.submit();
                  


      alert(cod+pass);

}