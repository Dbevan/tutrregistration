"use strict";
(function(){
	
	// Each class must have a line in this object whose name matches the labels from the code.php file.
	var prices = {  // Price associated with each class, by name.
			"Free Block": 0.00,  // Keep this.
			"Class 1": 3.00,
			"Class 2": 2.00,
			"Class 3": 5.00,
			"Class 4": 50.00,
		}
	
	// In case of reload, we need the drop-down class selection and cost to reset. Also, we don't want anyone to edit cost by hand.
	
	function clear_form() {
		cost.value = "0"
		cost.disabled = true
		
		for ( let elem of document.querySelectorAll('.block') )
			elem.value = 'Free Block'
	}
	
	// Toggle presentation of a specifically targeted 
	function toggle(target) {
		for ( let elem of document.querySelectorAll('details[open]') ) elem.close()  // Hide all visible details.
		
		// Display details for the one the user clicked.
		document.getElementById(e.target.href.substr(1)).open()
	}
	
	function dropdowns() {
		// This code re-calculates cost anytime a change is made.
		var totalcost = 0
		
		for ( let elem of document.querySelectorAll('select.block') )
			totalcost += prices[elem.value]
		
		cost.value = totalcost
		hiddencost.value = totalcost
	}
	
	function validate_email(address) {
		function validate_common(part, maxlength) {
			part = part.replace(/^\s+|\s+$/g, '')
			if ( !part ) return false
			if ( part.length > maxlength ) return false
			if ( part[0] == '.' || part[part.length-1] == '.' ) return false
			if ( part.search(/\.\./) != -1 ) return false
			return true
		}
		
		function validate_domain(part) {
			if ( !validate_common(part, 255) ) return false
			if ( part.search(/^[\w]+([\w\.\-]+\w)?$/i) == -1 ) return false
			return true
		}
		
		function validate_local(part) {
			if ( !validate_common(part, 64) ) return false
			if ( part.search(/^[a-z0-9\.\-+_!#$%&'\/=`|~?^{}*]+$/i) == -1 ) return false
			return true
		}
		
		if ( !address || address.length == 0) return false;
		
		let parts = address.split('@')
		if ( parts.length != 2 ) return false
		if ( validate_local(parts[0]) && validate_domain(parts[1]) ) return true
		return false
	}
	
	function validate_form() {
		if ( !validate_email(email.value) ) {
			alert("The email you provided is invalid. Please double check the provided input.");
			return false;
		}
		
		return true;
	}
	
	clear_form()
	registration.addEventListener('submit', validate_form)
	
	document.addEventListener('change', e => {
		if ( !e.target.matches('select[name^="block"]') ) return
		dropdowns(e.target.name)  // Re-calculate costs.
	})
	
	document.addEventListener('click', e => {
		if ( !e.target.matches('#calendar a') ) return
		
		for ( let detail of document.querySelectorAll('details') ) detail.open = false
		document.querySelector(e.target.getAttribute('href')).open = true
	})
	
	/*
	$('#caltop a').click(function(){
		var self = $(this);
		var offset = $('#caltop a').index(self);
		toggle(offset);
	});
	*/
})()
