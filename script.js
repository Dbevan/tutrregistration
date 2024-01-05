"use strict";
(function(){
	
	function clear_form() {  // Reset values to defaults on page (re)load.
		cost.value = "0"
		cost.disabled = true
		
		for ( let elem of document.querySelectorAll('.block') )
			elem.value = 'Free Block'
	}
	
	function toggle(target) {  // Toggle presentation of a specifically targeted.
		for ( let elem of document.querySelectorAll('details[open]') ) elem.close()  // Hide all visible details.
		
		// Display details for the one the user clicked.
		document.getElementById(e.target.href.substr(1)).open()
	}
	
	function dropdowns() {  // Re-calculate the cost on selection change.
		var total = 0
		
		for ( let elem of document.querySelectorAll('.classes select') )
			total += parseFloat(document.getElementById(elem.value) ? document.getElementById(elem.value).dataset.price : 0)
		
		cost.value = total
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
		
		for ( let detail of document.querySelectorAll('#details details') ) detail.open = false
		let target = document.querySelector(e.target.getAttribute('href'))
		target.open = true
		e.preventDefault()
		e.stopPropagation()
	})

	for ( let elem of document.querySelectorAll('#details details') )
		elem.addEventListener("toggle", e => {
			if ( e.target.open ) e.target.scrollIntoView()
			else calendar.scrollIntoView()
		})
	
	/*
	$('#caltop a').click(function(){
		var self = $(this);
		var offset = $('#caltop a').index(self);
		toggle(offset);
	});
	*/
})()
