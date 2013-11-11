/*
 * jQuery File Upload Plugin JS Example 8.9.0
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/*jslint nomen: true, regexp: true */
/*global $, window, blueimp */

$(function () {
    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: 'server/php/',
        autoUpload: true,
        singleFileUploads: false,
        maxNumberOfFiles: 10,
        loadImageMaxFileSize: 400000000

    });

    // Enable iframe cross-domain access via redirect option:
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

        // Load existing files:
        $('#fileupload').addClass('fileupload-processing');
        $.ajax({
            // Uncomment the following to send cross-domain cookies:
            //xhrFields: {withCredentials: true},
            url: $('#fileupload').fileupload('option', 'url'),
            dataType: 'json',
            data: {"path" : $("#ponumber").val()+$("#ponumber").val()},
            context: $('#fileupload')[0],
            processData: false
        }).always(function () {
            $(this).removeClass('fileupload-processing');
        }).done(function (result) {
            $(this).fileupload('option', 'done')
                .call(this, $.Event('done'), {result: result});
        });
    $('#fileupload').bind('fileuploaddone', function (e, data) { 
        $("#submit-button").removeAttr("disabled");

    }).bind('fileuploadadd', function (e, data) {
           console.log("chunk done");
    }).bind('fileuploadprocessdone', function (e, data) {
               $("#submit-button").attr("disabled", "disabled");
    }).bind('fileuploadcompleted', function (e, data) {
          //console.log("fileuploadcompleted");
    })
});
