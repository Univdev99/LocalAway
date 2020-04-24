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

    function validSubmitBtn() {
        if ($('.item-show').hasClass('item-submit')) {
            $('.next-btn').prop('type', 'submit');
        } else {
            $('.next-btn').prop('type', 'button');
        }
    }
    $('.next-btn').click(function() {
        if($('#step1-policy-alert').length && !$('#step1-policy-alert').prop('checked')){
            $('.policy-alert').show();
            return false;
        }
        else{
            $('.policy-alert').hide();
        }

        if ($('.item-show').hasClass('item-submit')) {
            return;
        }

        let cur_pos = 1;
        while (!$(".item:nth-child(" + cur_pos + ")").hasClass('item-show')) {
            cur_pos++;
        }

        const is_checked = checkEmpty(".item:nth-child(" + cur_pos + ")");
        if (is_checked) {
            if (!$(".item:nth-child(" + cur_pos + ")").hasClass("end-part")) {
                $(".item:nth-child(" + cur_pos + ")").removeClass("item-show");
                if ($(".item:nth-child(" + cur_pos + ")").hasClass("item-select")) {
                    $(".item:nth-child(" + cur_pos + ") input[type=radio]").each(function() {
                        if ($(this)[0].checked) {
                            var next_index = $(this).attr('data-next');
                            $(".item:nth-child(" + (cur_pos + Number(next_index)) + ")").addClass("item-show item-selected");
                            $(".item:nth-child(" + (cur_pos + Number(next_index)) + ")").attr("data-before", next_index);
                        }
                    });
                } else {
                    $(".item:nth-child(" + (cur_pos + 1) + ")").addClass("item-show");
                }
            } else {
                const param = {}
                var item_cnt = $(".item").length;

                for (var i = 1; i <= item_cnt; i++) {
                    if (checkEmpty(".item:nth-child(" + i + ")")) {
                        $(".item:nth-child(" + i + ") input").each(function() {
                            if ($(this).prop('type') == "text" || $(this).prop('type') == "number" || ($(this).prop('type') == "radio" && $(this).prop("checked")) || $(this).prop('type') == "hidden") {
                                param[$(this).attr('name')] = $(this).val();
                            }

                        });
                    }
                }

                $.ajax({
                        url: '/customer/signup/basic',
                        type: 'post',
                        data: param,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    })
                    .then(function() {
                        window.location = '/customer/signup/sizing';
                    });
            }
        }

        validBackBtnShow();
        validSubmitBtn();

        return false;
    });

    $(".back-btn").click(function() {
        let cur_pos = 1;
        while (!$(".item:nth-child(" + cur_pos + ")").hasClass('item-show')) {
            cur_pos++;
        }

        var jq_cur = ".item:nth-child(" + cur_pos + ")";
        if (!$(jq_cur).hasClass(".first-row")) {
            $(jq_cur).removeClass("item-show");
            $(jq_cur + " label").removeClass("text-danger");

            if ($(jq_cur).hasClass("item-selected")) {
                var before_index = $(jq_cur).attr('data-before');
                $(".item:nth-child(" + (cur_pos - Number(before_index)) + ")").addClass("item-show");
            } else {
                $(".item:nth-child(" + (cur_pos - 1) + ")").addClass("item-show");
            }
        }

        validBackBtnShow();
        validSubmitBtn();

    });

    function checkEmpty(item) {
        let flag = false;
        // $(item + " input[type=checkbox]").each(function() {
        //     if ($(this)[0].checked) {
        //         flag = true;
        //     }
        // });
        if ($(item).hasClass("dislike")) {
            flag = true;
        }

        $(item + " input[type=radio]").each(function() {
            if ($(this)[0].checked) {
                flag = true;
            }
        });

        $(item + " input[type=text], " + item + " input[type=number]").each(function() {
            if (($(this).val() != "")) {
                flag = true;
            } else {
                // var temp = $(this).attr('id');
                $(item + " label[for='" + $(this).attr("id") + "'").addClass("text-danger");
                flag = false;
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

    $(".img-div").click(function() {

        $(".img-div").removeClass("selected");
        $(".img-radio").attr("checked", false);
        $(this).parents(".img-selector")
            .find(".img-div")
            .addClass("selected");
        $(this).parents(".img-selector").find(".img-radio").prop("checked", true);
    });


    $(".dislike-color").click(function() {
        $(this).toggleClass("selected");
        var checkBox = $(this).find(".color-check");
        checkBox.prop("checked", !checkBox.prop("checked"));
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
        startDate: '+9d'
    });

    $('#calendar').on('changeDate', function(event) {
        var date = event.date;
        var str = date.toLocaleDateString();
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
        format: 'mm/dd/yyyy',
        startDate: '+9d',
        todayHighlight: true
    });

    jQuery(document).delegate('[for]', 'click', function(e) {
        var targetEl = jQuery('#' + jQuery(this).attr('for'));
        if (targetEl.is('div.your-custom-dropdown-class')) { //if targetEl is one of your dropdowns
            e.preventDefault();
            targetEl.trigger('click'); //open the drop down
        }
    });


    $('#step1-receive-alert').click(function(){
        if(!$('#step1-phone-number').val()){
            $('.phone-alert').show();
            return false;
        }
        else{
            $('.phone-alert').hide();
            return true;
        }
    });

    $('#basic-asap').click(function (){
        Date.prototype.addDays = function(days) {
            var date = new Date(this.valueOf());
            date.setDate(date.getDate() + days);
            return date;
        }
        var today = new Date();
        var d = today.addDays(10);
        $('#calendar').datepicker("setDate",  new Date(d.getFullYear(), d.getMonth(), d.getDate()));
    });
})