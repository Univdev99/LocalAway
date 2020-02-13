$(function() {
    var row_number = 0;
    // $('#exampleModal').on('show.bs.modal', function(event) {
    //     var recipient = $('.emailtext').val();
    //     var modal = $(this)
    //     modal.find('.modal-body input#email-text').val(recipient)
    // });

    $("#request-form").submit(function() {
        $(".spinner-border").css("display", "block");
        $("#request-btn").css("display", "none");
        var email = $('#email-text').val();
        var name = $('#name-text').val();
        const title = [
            "Thank you for requesting access",
            "Congratulations!",
            "Welcome!",
        ]
        const content = [
            "We’re excited to have you on board! Please check your email for next steps and to learn more about our waitlist. If you’d like to skip the line, you can fill out the survey by clicking on “start survey”. ",
            "Our waitlist might be 200k, but we’re putting you first. Please check your inbox for next steps, and in the meantime please fill out the survey so we can learn about you!",
            "Our waitlist might be 200k, but we’re interested in putting you first. Access is $30 per month. Start uploading your clothes today so that our users can find great fashion locally. First tell us more about you.",
        ]
        $.ajax({
            url: "/checkemail",
            method: 'get',
            data: {
                email: email,
                name: name,
                row_number: row_number
            },
            success: function(result) {
                if (result == "true") {
                    $("#exampleModalLabel2").text(title[Math.floor(Math.random() * 2)]);
                    $("#modalcontent2").text(content[Math.floor(Math.random() * 2)]);
                } else {
                    $("#exampleModalLabel2").text("Welcome Back!");
                    $("#modalcontent2").text("Our waitlist might be 200k, but we’re interested in putting you first. Access is $30 per month. Start uploading your clothes today so that our users can find great fashion locally. First tell us more about you.");
                }
                $(".spinner-border").css("display", "none");
                $("#request-btn").css("display", "block");
                $("#hidden-name").val(name);
                $("#hidden-email").val(email);
                $("#close-btn").click();
                $("#next-modal-btn").click();
            }
        });
        return false;
    });

    $(".first-form").submit(function() {
        $(this).find('.open-modal').click();
        var first_mail = $(this).find('.mail-text').val();
        $('#exampleModal').find('.modal-body input#email-text').val(first_mail);
        $.ajax({
            url: "/save-email",
            method: 'get',
            data: {
                email: first_mail
            },
            success: function(result) {
                row_number = result;
            }
        });
        return false;
    });


})