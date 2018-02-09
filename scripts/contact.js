$(function() {

    var inquiryType =   $('.field-wrapper .field-container select#inquiry-type');

    inquiryType.change(function() {

        if ($(this).val() == 'general') {
            window.location = "support";
        } else if($(this).val() == 'technical') {
            window.location = "support";
        } else if($(this).val() == 'distributors') {
            window.location = "distributors";
        }

    });

});