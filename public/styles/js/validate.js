$("#firstname").on("keyup change", function(e) {
    if ($(this).val() !=="") {
        $(this).addClass('is-valid');
        $(this).removeClass('is-invalid');
        $("#firstname_cek").addClass('valid-tooltip');
        $("#firstname_cek").removeClass('invalid-tooltip');
        $("#firstname_cek").text("Looks good!");
    } else {
        $(this).addClass('is-invalid');
        $(this).removeClass('is-valid');
        $("#firstname_cek").addClass('invalid-tooltip');
        $("#firstname_cek").removeClass('valid-tooltip');
        $("#firstname_cek").text("Please provide a firstname !!");
    }
});
$("#lastname").on("keyup change", function(e) {
    if ($(this).val() !=="") {
        $(this).addClass('is-valid');
        $(this).removeClass('is-invalid');
        $("#lastname_cek").addClass('valid-tooltip');
        $("#lastname_cek").removeClass('invalid-tooltip');
        $("#lastname_cek").text("Looks good!");
    } else {
        $(this).addClass('is-invalid');
        $(this).removeClass('is-valid');
        $("#lastname_cek").addClass('invalid-tooltip');
        $("#lastname_cek").removeClass('valid-tooltip');
        $("#lastname_cek").text("Please provide a lastname !!");
    }
});
$("#city").on("keyup change", function(e) {
    if ($(this).val() !=="") {
        $(this).addClass('is-valid');
        $(this).removeClass('is-invalid');
        $("#city_cek").addClass('valid-tooltip');
        $("#city_cek").removeClass('invalid-tooltip');
        $("#city_cek").text("Looks good!");
    } else {
        $(this).addClass('is-invalid');
        $(this).removeClass('is-valid');
        $("#city_cek").addClass('invalid-tooltip');
        $("#city_cek").removeClass('valid-tooltip');
        $("#city_cek").text("Please provide a city !!");
    }
});
$("#state").on("keyup change", function(e) {
    if ($(this).val() !=="") {
        $(this).addClass('is-valid');
        $(this).removeClass('is-invalid');
        $("#state_cek").addClass('valid-tooltip');
        $("#state_cek").removeClass('invalid-tooltip');
        $("#state_cek").text("Looks good!");
    } else {
        $(this).addClass('is-invalid');
        $(this).removeClass('is-valid');
        $("#state_cek").addClass('invalid-tooltip');
        $("#state_cek").removeClass('valid-tooltip');
        $("#state_cek").text("Please provide a state !!");
    }
});
$("#zip").on("keyup change", function(e) {
    if ($(this).val() !=="") {
        $(this).addClass('is-valid');
        $(this).removeClass('is-invalid');
        $("#zip_cek").addClass('valid-tooltip');
        $("#zip_cek").removeClass('invalid-tooltip');
        $("#zip_cek").text("Looks good!");
    } else {
        $(this).addClass('is-invalid');
        $(this).removeClass('is-valid');
        $("#zip_cek").addClass('invalid-tooltip');
        $("#zip_cek").removeClass('valid-tooltip');
        $("#zip_cek").text("Please provide a zip !!");
    }
});
$("#email").on("keyup change", function(e) {
    if ($(this).val() !=="") {
        $(this).addClass('is-valid');
        $(this).removeClass('is-invalid');
        $("#email_cek").addClass('valid-tooltip');
        $("#email_cek").removeClass('invalid-tooltip');
        $("#email_cek").text("Looks good!");
    } else {
        $(this).addClass('is-invalid');
        $(this).removeClass('is-valid');
        $("#email_cek").addClass('invalid-tooltip');
        $("#email_cek").removeClass('valid-tooltip');
        $("#email_cek").text("Please provide a email !!");
    }
});
$("#username").on("keyup change", function(e) {
    if ($(this).val() !=="") {
        $(this).addClass('is-valid');
        $(this).removeClass('is-invalid');
        $("#username_cek").addClass('valid-tooltip');
        $("#username_cek").removeClass('invalid-tooltip');
        $("#username_cek").text("Looks good!");
    } else {
        $(this).addClass('is-invalid');
        $(this).removeClass('is-valid');
        $("#username_cek").addClass('invalid-tooltip');
        $("#username_cek").removeClass('valid-tooltip');
        $("#username_cek").text("Please provide a username !!");
    }
});
$("#password").on("keyup change", function(e) {
    if ($(this).val() !=="") {
        $(this).addClass('is-valid');
        $(this).removeClass('is-invalid');
        $("#password_cek").addClass('valid-tooltip');
        $("#password_cek").removeClass('invalid-tooltip');
        $("#password_cek").text("Looks good!");
    } else {
        $(this).addClass('is-invalid');
        $(this).removeClass('is-valid');
        $("#password_cek").addClass('invalid-tooltip');
        $("#password_cek").removeClass('valid-tooltip');
        $("#password_cek").text("Please provide a password !!");
    }
});
$("#address").on("keyup change", function(e) {
    if ($(this).val() !=="") {
        $(this).addClass('is-valid');
        $(this).removeClass('is-invalid');
        $("#address_cek").addClass('valid-tooltip');
        $("#address_cek").removeClass('invalid-tooltip');
        $("#address_cek").text("Looks good!");
    } else {
        $(this).addClass('is-invalid');
        $(this).removeClass('is-valid');
        $("#address_cek").addClass('invalid-tooltip');
        $("#address_cek").removeClass('valid-tooltip');
        $("#address_cek").text("Please provide a address !!");
    }
});
