/*
 * jQuery File Upload Plugin JS Example 5.0.1
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://creativecommons.org/licenses/MIT/
 */

/*jslint nomen: false */
/*global $ */

$(function () {

    // Initialize the jQuery File Upload widget:
	
	




    // Open download dialogs via iframes,
    // to prevent aborting current uploads:
    $('#'+IDUPLOAD+' .files a:not([target^=_blank])').live('click', function (e) {
        e.preventDefault();
        $('<iframe style="display:none;"></iframe>')
            .prop('src', this.href)
            .appendTo('body');
    });
	
	
	$('#'+IDUPLOAD).fileupload({
    url: MYUPLOADPATH,
    autoUpload : AutoUpload ,
	dataType: 'json',
	maxNumberOfFiles : MaxNumberOfFiles ,
	acceptFileTypes : AcceptFileTypes,
	});

	/*
	if(GETALLIMAG == 1)
	{
		$.getJSON(MYSCRIPTPATH+'/admin/'+CONTROLLER+'/getimage/id/'+ITEMID, function(datae) {
			$('#fileupload .files').append('kamal');
			
		});
	}
	*/

});
