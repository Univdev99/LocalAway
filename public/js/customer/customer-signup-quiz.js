$(function() {
    validBackBtnShow();

    function validBackBtnShow() {
        if ($('.item-show').hasClass('first-row')) {
            $('.back-btn').hide();
            $('.next-btn').removeClass('float-right');
        } else {
            $('.back-btn').show();
            $('.next-btn').addClass('float-right');
        }
    }

    $('.next-btn').click(function() {


        let cur_pos = 1;
        while (!$(".item:nth-child(" + cur_pos + ")").hasClass('item-show')) {
            cur_pos++;
        }

        const is_checked = checkEmpty(".item:nth-child(" + cur_pos + ")");
        if (is_checked) {
            if (!$(".item:nth-child(" + cur_pos + ")").hasClass("end-part")) {
                $(".item:nth-child(" + cur_pos + ")").removeClass("item-show");
                $(".item:nth-child(" + (cur_pos + 1) + ")").addClass("item-show");
            } else {
                // const param = {}

                // $("form#step1").serializeArray().forEach(function(data) {
                //     param[data.name] = data.value;
                // })

                // if (result) {
                //     $.ajax({
                //             url: '/customer/signup',
                //             type: 'post',
                //             data: param
                //         })
                //         .then(function() {

                //         });
                // }
                // $("#basic-form").submit();


            }
        }

        validBackBtnShow();

    });

    $(".back-btn").click(function() {
        let cur_pos = 1;
        while (!$(".item:nth-child(" + cur_pos + ")").hasClass('item-show')) {
            cur_pos++;
        }

        if (!$(".item:nth-child(" + cur_pos + ")").hasClass(".first-row")) {
            $(".item:nth-child(" + cur_pos + ")").removeClass("item-show");
            $(".item:nth-child(" + (cur_pos - 1) + ")").addClass("item-show");
        }

        validBackBtnShow();

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
            } else {
                var temp = $(this).attr('id');
                $("label[for='" + $(this).attr("id") + "'").addClass("text-danger");
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

    function showNextStep(cur_step) {
        let next_step = 'step-' + (cur_step + 1);

        if (cur_step === 2) {
            const gender = $("input.gender:checked").val()
            if (gender === "man") {
                next_step = 'step-3-man'
            } else if (gender === "woman") {
                next_step = 'step-3-woman'
            } else {
                next_step = 'step-3-neutral'
            }
        }

        const next = $("#" + next_step);
        const progress = next.attr("step");

        $(".step").hide()
        $(next).show();
        $(".back-image").hide();
        $(".back-image[step='step-" + progress + "'").show();

        $(".progress-value").css({ width: (progress * 100 / 6) + '%' });
    }

    $(".gender-image").click(function() {

        $(".gender-image").removeClass("selected");
        $(".gender-input").attr("checked", false);
        $(this).parents(".gender-option")
            .find(".gender-image")
            .addClass("selected");
        $(this).parents(".gender-option")
            .find(".gender-input")
            .attr("checked", true);
    });

    $(".dislike-color").click(function() {
        $(this).toggleClass("selected")
    })

    $(".pattern-tile").click(function() {
        $(this).toggleClass("selected")
    })

    $('#calendar').datepicker({
        format: 'yyyy/mm/dd',
        calendarWeeks: true,
        todayHighlight: true,
        inline: true,
        sideBySide: true,
        startDate: '+10d'
    });

    $('#calendar').on('changeDate', function(event) {
        var date = event.date;
        var str = getMonthString(date.getMonth()) + ' ' + date.getDate() + 'th, ' + date.getFullYear();
        $('#trip-date').val(str);
    });

    function getMonthString(index) {
        var month = new Array();
        month[0] = "January";
        month[1] = "February";
        month[2] = "March";
        month[3] = "April";
        month[4] = "May";
        month[5] = "June";
        month[6] = "July";
        month[7] = "August";
        month[8] = "September";
        month[9] = "October";
        month[10] = "November";
        month[11] = "December";

        return month[index];
    }

    $('.checkDate').datepicker({
        format: 'mm-dd-yyyy',
        startDate: '+10d',
        todayHighlight: true
    });
})
