(function($){ $(function() {
	// This array holds the price information. Each class should have a line in the array, plus 'Free Block' with 0. These names must match the label names on the select drop-downs in code.php.
	var prices = new Array();
	prices["Free Block"] = 0.00;
	prices["Class 1"] = 3.00;
	prices["Class 2"] = 2.00;
	prices["Class 3"] = 5.00;
	prices["Class 4"] = 50.00;

    
	// In case of reload, we need the drop-down class selection and cost to reset. Also, we don't want anyone to edit cost by hand.

	function clear_form() {
		document.registration.cost.value = "0";
		document.registration.cost.disabled = true;
		$('.block').val('Free Block');
	}

	function show_hide(shID) {
		// Whenever someone clicks a class on the calendar, we must hide all details, then find the one they clicked and display it.
        $('.details').slideUp(250, function(){window.setTimeout(function() {
        $('#' + shID).slideDown(250);
        }, 50)});
	}

	function dropdowns() {
		// This code re-calculates cost anytime a change is made.
		var totalcost = 0;

		$('.block').map(function(){
			totalcost += prices[this.options[this.selectedIndex].label];
		});

		document.registration.cost.value = totalcost;
		document.registration.hiddencost.value = totalcost;
	}

	if(typeof(String.prototype.trim) === "undefined") {
		String.prototype.trim = function() {
			return String(this).replace(/^\s+|\s+$/g, '');
		};
	}

	function validate_email(address) {
		function validate_common(part, maxlength) {
			part = part.trim();
			if ( !part ) return false;
			if ( part.length > maxlength ) return false;
			if ( part[0] == '.' || part[part.length-1] == '.' ) return false;
			if ( part.search(/\.\./) != -1 ) return false;
			return true;
		}

		function validate_domain(part) {
			if ( !validate_common(part, 255) ) return false;
			if ( part.search(/^[\w]+([\w\.\-]+\w)?$/i) == -1 ) return false;
			return true;
		}

		function validate_local(part) {
			if ( !validate_common(part, 64) ) return false;
			if ( part.search(/^[a-z0-9\.\-+_!#$%&'\/=`|~?^{}*]+$/i) == -1 ) return false;
			return true;
		}

		if ( !address || address.length == 0) return false;

		var parts = address.split('@');
		if ( parts.length != 2 ) return false;

		if ( !validate_local(parts[0]) ) return false;
		if ( !validate_domain(parts[1]) ) return false;

		return true;
	}

	function validate_form() {
		if ( !validate_email($('#email').val()) ) {
			alert("The email you provided is invalid. Please double check the provided input.");
			return false;
		}

		return true;
	}

	clear_form();
	$('#regform').submit(validate_form);
	$('.block').change(dropdowns);

	$('#caltop a').click(function(){
		var self = $(this);
		var offset = $('#caltop a').index(self);
		show_hide(offset);
	});





})})(jQuery);