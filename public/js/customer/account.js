"use strict";

$(function() {
    $(".btn-billing").click(function(){
        $(this).hide();
        $(".billing-group").show();
        $(".check-billing").hide();
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
});