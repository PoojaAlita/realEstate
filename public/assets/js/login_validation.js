$(function() {
    $("#form_login").validate({
        rules: {
            email: "required",
            password: {
                required: true,
            },
        },
      
        messages: {
            email: "Please Enter Email Address",
            password: {
                required: "Please Enter Password",
            },
        },
        highlight: function(element) {
            $(element).removeClass("error");
        },
        normalizer: function(value) {
            return $.trim(value);
        },
    });
});

/*Validation For Forgot Password*/
$(function() {
    $(".forgot_password").validate({
        rules: {
            email: "required",
        },
      
        messages: {
            email: "Please Enter Email Address",
           
        },
        highlight: function(element) {
            $(element).removeClass("error");
        },
        normalizer: function(value) {
            return $.trim(value);
        },
    });
}); 