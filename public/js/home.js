$(document).ready(function() {
    $('#sign-btn').click(function() {
        var url = $('#sub-email').val();
        var pattern = /^([a-zA-A0-9_.-])+@([a-zA-Z0-9_.-])+([a-zA-Z])+/;
        if (url.match(pattern) == null) {
            return false;
        } else {
            $('#news').css("display", "none");
            // $('#sub-email').css("display", "none");
            // $('#sign-btn').css("display", "none");
            $('#thank').css("display", "block");
        }
    });
});