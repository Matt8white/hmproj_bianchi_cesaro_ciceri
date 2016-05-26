$(document).ready(function () {


    "use strict";

/* ===========================================
   SIGNUP-MODAL VALIDATION. WITH CONFIRM PSW.
============================================== */
    $("#signup-modal").submit(function(e) {
        e.preventDefault();
        var data = {
            password: $("#sm-password").val(),
            email: $("#sm-email").val(),
            pswconfirm: $("#sm-confirm").val()
        };

        if ( (data['password'].length > 1) && isValidEmail(data['email']) && (data['password'].match(data['pswconfirm'])) ) {
            $('.sm-success').fadeIn(1000);
            $('.sm-failed').fadeOut(500);
        } else {
            $('.sm-failed').fadeIn(1000);
            $('.sm-success').fadeOut(500);
        }

        return false;
    });


});
