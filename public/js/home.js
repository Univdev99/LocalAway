"use strict";
$(document).ready(function() {
    $("#ai_access_modal").modal({ backdrop: 'static', keyboard: false });

    $('#request-access-form').submit(function() {
        $(".spinner-border").css("display", "inline-block");
        $("#btn-access-submit").css("display", "none");
        var access_code = $('#access-code').val();
        $.ajax({
            url: '/access-ai',
            method: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                access_code: access_code
            },
            success: function(response) {
                $(".spinner-border").css("display", "none");
                $("#btn-access-submit").css("display", "inline-block");
                if (response == "true") {
                    $("#ai_access_modal").modal("hide");
                } else {
                    $("#access_code_error").show();
                }
            }
        });
        return false;
    });

    $('#btn-request-access').click(function() {
        $("#ai_access_modal").modal("hide");
        $("#ai_request_access_modal").modal({ backdrop: 'static', keyboard: false });

    });

    $("#ai_request_access_modal").on('shown.bs.modal', function() {
        $("body").addClass("modal-open");
    });

    $("#request_send_form").submit(function() {
        $(".spinner-border").css("display", "inline-block");
        $("#btn-request-send").css("display", "none");
        var email = $('#email-text').val();
        var name = $('#name-text').val();
        var phone = $('#phone-text').val();
        var person_type = $("input[name='person_type']:checked").val();
        var note = $('#note-text').val();

        $.ajax({
            url: "/save-email",
            method: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                email: email,
                name: name,
                phone: phone,
                person_type: person_type,
                note: note
            },
            success: function(result) {

                $.ajax({
                    url: "/send-mail",
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        name: name,
                        email: email,
                        access_code: result
                    },
                    success: function(response) {}
                });
            }
        });

        $(".spinner-border").css("display", "none");
        $("#btn-request-send").css("display", "inline-block");
        $("#hidden-name").val(name);
        $("#hidden-email").val(email);
        $("#ai_request_access_modal").modal("hide");
        $("#ai_access_modal").modal({ backdrop: 'static', keyboard: false });
        $("body").removeClass("modal-open");
        return false;
    });

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