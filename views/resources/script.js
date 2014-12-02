/**
 * Created by user2 on 02/12/14.
 */

$("#loginform").on("submit", function () {
    var username = $("#username").val();
    var password = $("#password").val();
    $.post("../controllers/login.php", {username:username, password:password},
        function(resultado){
            $("form").get(0).reset();
            $("#username").focus();
            $("#error").html(resultado);
        });

    return false;
});