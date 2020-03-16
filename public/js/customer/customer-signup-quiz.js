$('#step1').submit(function() {

    const param = {}

    $("form#step1").serializeArray().forEach(function(data) {
        param[data.name] = data.value;
    })

    if (result) {
        $.ajax({
                url: '/customer/signup',
                type: 'post',
                data: param
            })
            .then(function() {

            });
    }

    return false;
});
