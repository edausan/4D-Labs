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


    

    uploadFile.on('change', function() {
        fileName.html($(this)[0].files[0]['name']);

        if ($(this)[0].files[0].size > 10485760) {
            warningText.removeClass('good').addClass('warn');
            uploadBtn.addClass('disabled');
        } else {
            warningText.removeClass('warn').addClass('good');
            uploadBtn.removeClass('disabled');
            uploadBtn.removeProp('disabled');
        }
    });

});