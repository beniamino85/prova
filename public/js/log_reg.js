/*
function register() {

    var firstname = document.getElementById("id-firstname").value;
    var lastname = document.getElementById("id-lastname").value;
    var username = document.getElementById("id-username").value;
    var password = document.getElementById("id-password").value;


    var xmlhttp=new XMLHttpRequest();


    xmlhttp.onreadystatechange=function() {

        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            //var users = JSON.parse(this.responseText);
            console.log(this.response);
            document.getElementById("result").innerHTML=this.response;

        }

    }

    xmlhttp.open("POST","../controller/UserController.php?firstname=" + firstname + "&lastname=" + lastname
        + "&username=" + username + "&password=" + password,true);

    xmlhttp.send();

}*/

$("#register").on("click", function () {

    $.ajax({

        url: "../controller/UserController.php",
        type: "post",
        dataType: "json",
        data: {
            firstname: $("#id-firstname").val(),
            lastname: $("#id-lastname").val(),
            username: $("#id-username").val(),
            password: $("#id-password").val()

        }


    })
        .done(function (result) {
            $.each(result, function(index, user) {
                $("#results").append("<li>" + user.firstname + "</li>",
                                     "<li>" + user.lastname + "</li>" ,
                                     "<li>" + user.username + "</li>" ,
                                     "<li>" + user.password + "</li>");
            });

        })
        .fail(function(xhr, status, errorThrown){
            console.log("Erorre: " + errorThrown);
        })

});

