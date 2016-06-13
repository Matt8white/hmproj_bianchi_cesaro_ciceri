function changePageName() {
    "use strict";
    $.ajax({
        url: 'ajax/getter.php?q=1', success: function (result) {
            var ar = JSON.parse(result);
            document.title = ar[0] + " " + ar[1] + " | TIM";
        }
    });
}

function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var ar= JSON.parse(xmlhttp.responseText);
                document.getElementById("txtHint").innerHTML = "Make: " + ar["brand"] +"<br>Model: " + ar["model"];
                return "aaaaaa";
            }
        };
        xmlhttp.open("GET", "ajax/getter.php?q="+str, true);
        xmlhttp.send();
    }
}

function ciao() {
    "use strict";
    $.ajax({
        url: 'ajax/login.php', success: function (result) {
            $('.modal-dialog').html(result);
        }
    });
    $('#loginModal').modal('show');
}
