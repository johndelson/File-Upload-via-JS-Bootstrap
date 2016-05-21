

/* global $, window */

$(function () {
    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: 'http://localhost/w/test/files/'
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

   
        $('#fileupload').fileupload('option', {
            url: 'http://localhost/w/test/files/',
            // Enable image resizing, except for Android and Opera,
            // which actually support image resizing, but fail to
            // send Blob objects via XHR requests:
            disableImageResize: /Android(?!.*Chrome)|Opera/
                .test(window.navigator.userAgent),
            maxFileSize: 999000,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
			previewMaxWidth: 100,
			previewMaxHeight: 100,
			previewCrop: true
        }).on('fileuploadsubmit', function (e, data) {
			    var inputs = data.context.find(':input');
				if (inputs.filter(function () {
						return !this.value && $(this).prop('required');
					}).first().focus().length) {
					data.context.find('button').prop('disabled', false);
					return false;
				}
				data.formData = inputs.serializeArray();
		});
        // Upload server status check for browsers with CORS support:
        if ($.support.cors) {
            $.ajax({
                url: 'http://localhost/w/test/files/',
                type: 'HEAD'
            }).fail(function () {
                $('<div class="alert alert-danger"/>')
                    .text('Upload server currently unavailable - ' +
                            new Date())
                    .appendTo('#fileupload');
            });
        }
  

});
