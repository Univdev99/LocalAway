$(function () {

  switch (window.location.hash) {
    case "#final":
      showNextStep(5)
      break;
  }

  let email = null;

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  function validateSignup() {
    let result = true;
    $("#step1-first-name").siblings("label").removeClass("text-danger");
    $("#step1-last-name").siblings("label").removeClass("text-danger");
    $("#step1-email").siblings("label").removeClass("text-danger");
    $("#step1-birthday").siblings("label").removeClass("text-danger");
    $("#step1-password").siblings("label").removeClass("text-danger");
    $("#step1-confirm-password").siblings("label").removeClass("text-danger");
    $("#step1-phone-number").siblings("label").removeClass("text-danger");

    if (!$("#step1-first-name").val()) {
      $("#step1-first-name").siblings("label").addClass("text-danger");
      result = false;
    }

    if (!$("#step1-last-name").val()) {
      $("#step1-last-name").siblings("label").addClass("text-danger");
      result = false;
    }

    email = $("#step1-email").val()
    if (!validateEmail(email) || !email) {
      $("#step1-email").siblings("label").addClass("text-danger");
      result = false;
    }

    if (!$("#step1-birthday").val()) {
      $("#step1-birthday").siblings("label").addClass("text-danger");
      result = false;
    }

    if (!$("#step1-password").val()) {
      $("#step1-password").siblings("label").addClass("text-danger");
      result = false;
    }

    if (!$("#step1-confirm-password").val()) {
      $("#step1-confirm-password").siblings("label").addClass("text-danger");
      result = false;
    }

    if ($("#step1-password").val() !== $("#step1-confirm-password").val()) {
      $("#step1-password").siblings("label").addClass("text-danger");
      $("#step1-confirm-password").siblings("label").addClass("text-danger");
      result = false;
    }

    if (!$("#step1-phone-number").val()) {
      $("#step1-phone-number").siblings("label").addClass("text-danger");
      result = false;
    }

    const param = {}
    
    $("form#step1").serializeArray().forEach(function (data) {
      param[data.name] = data.value;
    })

    email = param.email

    if (result) {
      $.post('/customer/signup', param)
        .then(function () {
          showNextStep(1);
        })
        .fail(function () {
          $("#step1-email").siblings("label").addClass("text-danger");
          return false;
        })
    }

    return false
  }

  function validateGeneral() {
    let result = true;

    $("#step2-feet").siblings("label").removeClass("text-danger");
    $("#step2-inches").siblings("label").removeClass("text-danger");

    if (!$("#step2-feet").val()) {
      $("#step2-feet").siblings("label").addClass("text-danger");
      result = false;
    }

    if (!$("#step2-inches").val()) {
      $("#step2-inches").siblings("label").addClass("text-danger");
      result = false;
    }

    const param = { email: email }

    $("form#step2").serializeArray().forEach(function (data) {
      param[data.name] = data.value;
    })

    if (result) {
      $.post('/customer/general', param)
    }

    return result;
  }

  function validateWomen() {
    const fd = new FormData();

    fd.append('email', email);
    fd.append('custom_woman_body_type', $("#custom_woman_body_type").get(0).files[0])

    $("form#step3-woman").serializeArray().forEach(function (data) {
      fd.append(data.name, data.value);
    })

    $.ajax({
      url: '/customer/women',
      type: 'post',
      data: fd,
      contentType: false,
      processData: false,
    })

    return true;
  }

  function validateMen() {
    const fd = new FormData();

    fd.append('email', email);
    fd.append('custom_man_body_type', $("#custom_man_body_type").get(0).files[0])

    $("form#step3-man").serializeArray().forEach(function (data) {
      fd.append(data.name, data.value);
    })

    $.ajax({
      url: '/customer/men',
      type: 'post',
      data: fd,
      contentType: false,
      processData: false,
    })

    return true;
  }

  function validateNeutral() {
    const param = { email: email }

    $("form#step3-neutral").serializeArray().forEach(function (data) {
      param[data.name] = data.value;
    })

    $.post('/customer/neutral', param)

    return true;
  }

  function validateDislike() {
    const param = { email: email, materials: [], patterns: [], colors: [] }

    $("form#step4").serializeArray().forEach(function (item) {
      param.materials.push(item.value);
    })
    
    $(".dislike-color.selected>div").each(function (index, item) {
      param.colors.push($(item).css('background-color'));
    })

    $(".pattern-tile.selected").each(function (index, item) {
      param.patterns.push($(item).attr("value"))
    })

    $.post('/customer/dislike', param)

    return true;
  }

  function validateAlmostDone() {
    const param = { email: email }

    $("form#step5").serializeArray().forEach(function (data) {
      param[data.name] = data.value;
    })

    $.post('/customer/almost-done', param)
    
    window.location.hash = 'final'
    
    return true;
  }

  function validateFinal() {
    const param = { email: email }
    
    param.plan = $(".plan.selected").attr("value")

    $.post("/customer/finalize", param)
    
    return true;
  }

  $(".next-button").click(function () {
    const cur_step = parseInt($(this).parents(".step").attr('step'))
    const cur_step_id = $(this).parents(".step").attr("id")
    let validate;

    if (cur_step === 1) {
      validate = validateSignup()
    } else if (cur_step === 2) {
      validate = validateGeneral()
    } else if (cur_step === 3 && cur_step_id === "step-3-woman") {
      validate = validateWomen()
    } else if (cur_step === 3 && cur_step_id === "step-3-man") {
      validate = validateMen()
    } else if (cur_step === 3 && cur_step_id === "step-3-neutral") {
      validate = validateNeutral()
    } else if (cur_step === 4) {
      validate = validateDislike()
    } else if (cur_step === 5) {
      validate = validateAlmostDone()
    } else {
      validate = validateFinal()
    }

    if (!validate) {
      return;
    }
    
    showNextStep(cur_step)
  });

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

    $(".progress-value").css({ width: (progress * 100 / 6) + '%'});
  }

  $("input.gender").click(function () {
    $(".gender-image").removeClass("selected");
    $(this).parents(".gender-option")
      .find(".gender-image")
      .addClass("selected");
  });

  $(".image-upload-placeholder").click(function () {
    $(this).siblings(".image-upload[type=file]").click();
  })

  $(".image-upload").change(function () {
    if (this.files && this.files[0]) {
      $(this).siblings(".body-type-file-name").html($(this).val())
    }
  })

  $(".dislike-color").click(function () {
    $(this).toggleClass("selected")
  })

  $(".pattern-tile").click(function () {
    $(this).toggleClass("selected")
  })
})
