$(function() {
    var person_id = 0;
    var question_count = 0;
    // localStorage
    // $('#exampleModal').on('show.bs.modal', function(event) {
    //     var recipient = $('.emailtext').val();
    //     var modal = $(this)
    //     modal.find('.modal-body input#email-text').val(recipient)
    // });

    $("#request-form").submit(function() {
        $(".spinner-border").css("display", "inline-block");
        $("#request-btn").css("display", "none");
        var email = $('#email-text').val();
        var name = $('#name-text').val();
        var phone = $('#phone-text').val();
        var person_type = $("input[name='person_type']:checked").val();
        var note = $('#note-text').val();
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
                person_id = result['person_id'];
                localStorage.setItem('person_id', person_id);
                question_count = result['question_count'];
                localStorage.setItem('question_count', question_count);
                if (result['isCreatedOrUpdated'] == "true") {
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
                $('#exampleModal').modal('toggle');
                $("#exampleModa2").modal('toggle');

            }
        });
        return false;
    });

    $(".first-form").submit(function() {
        $('#exampleModal').modal('toggle');
        var first_mail = $(this).find('.mail-text').val();
        $('#exampleModal').find('.modal-body input#email-text').val(first_mail);
        return false;
    });


    let current_item = 0;

    var progress = -1;

    function move() {
        if (progress < question_count) {
            var elem = document.getElementById("myBar");
            elem.style.width = ((++progress) * 100 / question_count) + "%";
        }
    }

    $(".prev-button").click(function() {
        do {
            if (current_item > 0) {
                current_item--;
            }
        } while ($(".item:nth-child(" + (current_item + 1)).css("visibility") == "hidden");
        changeTitle(current_item);
        $(".wizard-body").css("top", -current_item * 100 + "%");
        $(".item").removeClass("item-show");
        $(".item:nth-child(" + (current_item + 1) + ")").addClass("item-show");
        $("#pagination").text(current_item + "/" + (question_count + 1));
    });

    $(".next-button").click(function() {
        const is_checked = checkEmpty(".item:nth-child(" + (current_item + 1) + ")");
        if (is_checked) {
            if (!$(".item:nth-child(" + (current_item + 1) + ")").hasClass("end-part")) {


                saveinfo(current_item);
                do {
                    current_item++;
                } while ($(".item:nth-child(" + (current_item + 1) + ")").css("visibility") == "hidden");

                changeTitle(current_item);

                $(".wizard-body").css("top", -current_item * 100 + "%");
                $(".item").removeClass("item-show");
                $("#pagination").text(current_item + "/" + (question_count + 1));
                $(".item:nth-child(" + (current_item + 1) + ")").addClass("item-show");
                if (progress + 2 <= current_item) {
                    move();
                }
            }
        }
    });

    $("body").on("keydown", function(e) {
        const keycode = e.which;
        $(".item:nth-child(" + (current_item + 1) + ") input.text-answer").focus();
        if ($(".item:nth-child(" + (current_item + 1) + ")").hasClass("end-part")) {
            if (keycode == "13") {
                $("#survey-form").submit();
            }
        } else {
            if (keycode == "13") {
                if ($(".item:nth-child(" + (current_item + 1) + ")").hasClass("start-part")) {
                    question_count = Number(localStorage.getItem('question_count'));
                }
                $(".next-button").click();
                event.preventDefault();
                return false;
            } else {

                // const item_button_selector = ".item:nth-child(" + (current_item + 1) + ") .item-button[data-key=" + keycode + "]";
                // $(item_button_selector).click();

                const item_checkbox_selector = ".item:nth-child(" + (current_item + 1) + ") input[data-key=" + keycode + "]";
                const item_arrow_selector = ".item:nth-child(" + (current_item + 1) + ") div.arrow-btn";
                const item_hidden_text = ".item:nth-child(" + (current_item + 1) + ") input.hidden-text";
                const item_div = ".item:nth-child(" + (current_item + 1) + ")";
                if ($(item_hidden_text).is(":focus")) {
                    return;
                } else {
                    if ($(item_checkbox_selector).prop("checked")) {
                        $(item_checkbox_selector).prop("checked", false);
                    } else {
                        $(item_checkbox_selector + "+label .hidden-text").click();
                        $(item_checkbox_selector).prop("checked", true);
                        if ($(item_checkbox_selector).length != 0) {

                            $(item_arrow_selector).css("opacity", "1");
                            $(item_arrow_selector).css("bottom", "0");
                        }
                    }
                    if ($(item_checkbox_selector).hasClass("link-expand")) {
                        linkexpand(".link-expand");
                    }
                    if ($(item_checkbox_selector).hasClass("if")) {
                        $(item_checkbox_selector).click();
                    }
                    if ($(item_div).hasClass("text-part")) {
                        $(item_arrow_selector).css("opacity", "1");
                        $(item_arrow_selector).css("bottom", "0");
                    }
                }

            }
        }
    });

    // $('body').on('mousewheel', function(e) {
    //     const direction = Math.round(e.originalEvent.wheelDelta / 120);
    //     if (direction > 0) {
    //         $(".prev-button").click();
    //     } else if (direction < 0) {
    //         $(".next-button").click();
    //     }
    // });

    $("#start-button").click(function(e) {
        if (question_count == 0) {
            question_count = Number(localStorage.getItem('question_count'));
        }
        $(".next-button").click();
        // $(".title").css("opacity", "1");
    });

    $(".ok-button").click(function(e) {
        $(".next-button").click();
    });

    $(".other").click(function() {
        $(".item:nth-child(" + (current_item + 1) + ") input.hidden-text").css("display", "block");
        $(".item:nth-child(" + (current_item + 1) + ") .other .answer-body span").css("display", "none");
        $(".item:nth-child(" + (current_item + 1) + ") .other .answer-body .hidden-text").focus();
    });

    $('.item').on('click', function() {
        const item_checkbox_selector = ".item:nth-child(" + (current_item + 1) + ") input:checked";
        if ($(item_checkbox_selector).length) {
            const item_arrow_selector = ".item:nth-child(" + (current_item + 1) + ") div.arrow-btn";
            $(item_arrow_selector).css("opacity", "1");
            $(item_arrow_selector).css("bottom", "0");
            return;
        }
    });

    $(".link-expand").change(function() {
        linkexpand(".link-expand");
    });

    function linkexpand(link) {
        const link_selecter = ".item:nth-child(" + (current_item + 1) + ") input.link-expand";
        const expand_selecter = ".item:nth-child(" + (current_item + 1) + ") label.expanded";
        if ($(link_selecter)[1].checked) {
            $(expand_selecter).css("visibility", "visible");
            $(expand_selecter + " .hidden-text").focus();
        } else {
            $(expand_selecter).css("visibility", "hidden");
        }
    }

    $("#20-a").on('click', function() {
        $('.if-no').css('visibility', 'visible');
        $('.if-yes').css('visibility', 'hidden');
    });

    $("#20-b").on('click', function() {
        $('.if-yes').css('visibility', 'visible');
        $('.if-no').css('visibility', 'hidden');
    });

    function checkEmpty(item) {
        let flag = false;
        $(item + " input[type=checkbox]").each(function() {
            if ($(this)[0].checked) {
                flag = true;
            }
        });

        $(item + " input[type=radio]").each(function() {
            if ($(this)[0].checked) {
                flag = true;
            }
        });

        $(item + " input[type=text]").each(function() {
            if (($(this).val() != "") && $(this).hasClass("text-answer")) {
                flag = true;
            }
        });
        if ($(item + " input").length == 0) {
            flag = true;
        }

        if (flag == false) {

            return false;
        } else {
            return true;
        }
    }

    function changeTitle(current) {
        var title = [
            "1. Boutique Profile",
            "2. Customers",
            "3. Logistics",
            "4. LocalAway Partnership"
        ];
        if ($(".item:nth-child(" + current + ")").hasClass("start-part")) {
            $("#title").css("opacity", "1");
            $(".navigation-bar").css("opacity", "1");
            $("#title").text(title[0]);
        }

        if ($(".item:nth-child(" + (current + 1) + ")").hasClass("second-part")) {
            $("#title").text(title[1]);
        }

        if ($(".item:nth-child(" + (current + 1) + ")").hasClass("third-part")) {
            $("#title").text(title[2]);
        }

        if ($(".item:nth-child(" + (current + 1) + ")").hasClass("forth-part")) {
            $("#title").text(title[3]);
        }

        if ($(".item:nth-child(" + (current + 1) + ")").hasClass("start-part")) {
            $("#title").css("opacity", "0");
            $(".navigation-bar").css("opacity", "0");
        }
    }

    function saveinfo(current_item) {
        if (current_item > 0) {
            if (!($(".item:nth-child(" + (current_item + 1) + ")").hasClass("end-part"))) {
                var info = "";
                var input_info = "";
                const item_div = ".item:nth-child(" + (current_item + 1) + ")";

                $(item_div + " :input[type='checkbox']:checked").each(function() {
                    if ($(this).attr('id') != undefined) {
                        info += $(this).attr('id') + ",";
                        question_id = $(this).attr('name');
                    }
                    answer_type = 'multiple';

                });
                info = info.slice(0, -1)

                $(item_div + " :input[type='radio']:checked").each(function() {
                    info += $(this).attr('id');
                    question_id = $(this).attr('name');
                    answer_type = 'single';
                });

                $(item_div + " :input[type='text']").each(function() {
                    if ($(this).hasClass("text-answer")) {
                        info += $(this).attr('id');
                        question_id = $(this).attr('name');
                        answer_type = 'input';
                    }
                    input_info = $(this).val();
                });

                $.ajax({
                    url: "/save-info",
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        info: info,
                        input_info: input_info,
                        person_id: localStorage.getItem('person_id'),
                        question_id: question_id,
                        type: answer_type
                    },
                    success: function(result) {}
                });
            }
        }
    }
})