"use strict";

$(document).ready(function() {
    let table = $("#survey-table").DataTable();

    // $(".boutique-active").click(function() {
    //     let email = $(this).data('email');
    //     $.get("/dashboard/boutique/setinactive", { email })
    //         .done(function(res) {
    //             location.reload();
    //         });
    // });

    $("#survey-table").on("click", ".boutique-inactive", function() {
        let email = $(this).data('email');
        $.get("/dashboard/boutique/setactive", { email })
        .done(function(res) {
            location.reload();
        });
    });
});