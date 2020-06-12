"use strict";

$(function() {
    $(".btn-billing").click(function(){
        $(this).hide();
        $(".billing-group").show();
        $(".check-billing").hide();

        if ($("#check-billing").val()) {
            ["name", 'address1', 'address2', 'city', 'state', 'code', 'country', 'phone'].forEach(function (value) {
                $("#billing-" + value).val($("#shipping-" + value).val());
            });
        }
    });

    $(".btn-shipping").click(function(){
        $(this).hide();
        $(".shipping-group").show();
    });

    $(".contact").click(function (){
        $.get("/customer/contact", {})
        .done(function(){
            
        });
        return false;
    });

    $("#shipping-cancel").click(function () {
        $(".shipping-group").hide();
        $(".btn-shipping").show();
    })

    $("#billing-cancel").click(function () {
        $(".billing-group").hide();
        $(".btn-billing").show();
        $(".check-billing").show();
    })
});