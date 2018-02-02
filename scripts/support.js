$(function() {

    var selectBtn   =   $('button#select-btn');
    var uploadBtn   =   $('button#upload-btn');
    var uploadFile  =   $('input#upload-file');
    var fileName    =   $('label#file-name');
    var warningText =   $('label#warning-text');

    selectBtn.on('click', function() {
        $(this).siblings(uploadFile).click();
        uploadBtn.prop('disabled', false);
    });

    var fileTypes = [
        "application/pdf",
        "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
        "application/vnd.ms-excel",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        "text/plain",
        "text/html"
      ];


    

    uploadFile.on('change', function() {
        fileName.html($(this)[0].files[0]['name']);
        // alert($(this)[0].files[0]['type']);
        

        var allowedExt  =   ['image/jpeg', 'image/png', 'image/gif', 'image/tiff', 'application/x-zip-compressed', 'application/zip', 'application/x-zip', 'application/octet-stream']

        var notAllowedExt   =   ['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/x-msdownload', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'text/plain']
        if ($(this)[0].files[0].size > 15728640 ) {
            
            warningText.removeClass('good').addClass('warn');
            uploadBtn.addClass('disabled');

        } else {

            if (notAllowedExt.includes($(this)[0].files[0]['type']) ) {

                warningText.removeClass('good').addClass('warn');
                uploadBtn.addClass('disabled');
                
            } else {
                warningText.removeClass('warn').addClass('good');
                uploadBtn.removeClass('disabled');
                uploadBtn.removeProp('disabled');
            }
            
            
        }
    });


    var ticketInput =   $('.ticket-details input.ticket-input');
    var ticketLabel =   $('.ticket-details label');

    
    $(document).on('focus','.ticket-details input.ticket-input', function() {
        $(this).siblings('label').addClass('focused');
    });

    $(document).on('blur','.ticket-details input.ticket-input', function() {
        if ( $(this).val().length > 1 ) {
            $(this).siblings('label').addClass('focused');
            
        } else {
            $(this).siblings('label').removeClass('focused');
        }
    });

    $(document).on('focus','.ticket-details select.ticket-input', function() { 
        $(this).siblings('label').addClass('focused');
    });

    $(document).on('blur','.ticket-details select.ticket-input', function() {
        if ( $(this).val() ) {
            $(this).siblings('label').addClass('focused');
        } else {
            $(this).siblings('label').removeClass('focused');
        }
    });


});