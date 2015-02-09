var ajaxFormOptions = { beforeSubmit: formBefore, success: formSuccess, error: formError, dataType: 'json' };
var ajaxFormOptionsReload = { beforeSubmit: formBefore, success: formSuccessReload, error: formError, dataType: 'json' };

function formError (response, form, options) {
	$.fancybox.hideActivity();
	$("#requestStatus").html(response.html).removeClass('goodalertfield').addClass('alertfield').fadeIn('fast');
	var button = $(form).find("button[type=submit]").prop('disabled', false).removeClass('disabledButton');
}

function formBefore (formData, form, options) {
	$.fancybox.showActivity();
	var button = $(form).find("button[type=submit]").prop('disabled', true).addClass('disabledButton');
}

function formSuccess (response, statusText, xhr, form) {
	$.fancybox.hideActivity();
	if (response.method == 'ok') {
	    if ((typeof( response.url ) != 'undefined') && response.url != '/') {
            $.fancybox({type: 'ajax', href: response.url});
            return false;
		}
		if ((typeof( response.url ) != 'undefined')) {
			window.location = response.url;
		}
		$.fancybox.close();
		return false;
	} else if (response.method == 'error') {
		$("#requestStatus").html(response.html).removeClass('goodalertfield').addClass('alertfield').fadeIn('fast');
		var button = $(form).find("button[type=submit]").prop('disabled', false).removeClass('disabledButton');
		return false;
	}
	$.fancybox(response.html);
}

function formSuccessReload (response, statusText, xhr, form) {
	$.fancybox.hideActivity();
	if (response.method == 'ok') {
		if ((typeof( response.url ) != 'undefined')) {
			window.location = response.url;
		} else
			window.location.reload(true);
		$.fancybox.close();
		return false;
	}
	if (response.method=='error') {
		$("#requestStatus").html(response.html).removeClass('goodalertfield').addClass('alertfield').fadeIn('fast');
		var button = $(form).find("button[type=submit]").prop('disabled', false).removeClass('disabledButton');
		return false;
	}
	$.fancybox(response.html);
}



$(document).ready(function() {
	$("a.ajaxLink").fancybox();
	$("a.postLink").makePost();
	if (!$("#return_uri").val()) {
	    $("#return_uri").val(window.location.href);
	}
	$('.ajaxForm').ajaxForm(ajaxFormOptions);
	$('.ajaxFormReload').ajaxForm(ajaxFormOptionsReload);
    $('.checkboxchecker').each(populateCheckBoxes());
	try {
        $("img.lazyjs").lazyload({ effect : "fadeIn", skip_invisible : false });
	} catch(err) {}
});