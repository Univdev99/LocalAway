var page = 1;
$(document).ready(function() {
    loadMoreData(page, null);
});

$(".btn-all").click(function() {
    if ($("button.btn-filter.active").length == 0) {
        return false;
    }
    $("button.btn-filter.active").removeClass("active");
    $(this).toggleClass("active");

    $("#post-data").empty();
    page = 1;
    loadMoreData(page, null);
});

$(".btn-filter").click(function() {
    $(this).toggleClass("active");
    $(".btn-all").removeClass("active");

    var filter_data = [];
    var filter_lists = $("button.btn-filter.active");
    if (filter_lists == null) {
        $(".btn-all").click();
    }
    for (i = 0; i < filter_lists.length; i++) {
        filter_data.push($(filter_lists[i]).data("btn"));
    }

    $("#post-data").empty();
    page = 1;
    loadMoreData(page, filter_data);

});


$(window).scroll(function() {

    if (Math.round($(window).scrollTop() + $(window).height()) >= Math.round($(document).height())) {
        page++;
        loadMoreData(page);
    }
});

function loadMoreData(page, filter) {
    $.ajax({
            url: '?page=' + page,
            type: "get",
            data: {
                filter: filter
            },
            beforeSend: function() {
                $('.ajax-load').show();
            }
        })
        .done(function(data) {
            if (data.html == "") {
                $('.ajax-load').html("No more records found");
                return;
            }
            $('.ajax-load').hide();
            $("#post-data").append(data.html);
        })
        .fail(function(jqXHR, ajaxOptions, thrownError) {
            // alert('server not responding...');
        });
}