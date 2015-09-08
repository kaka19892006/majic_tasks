// Get keyboard input
// 

var is_onkeydown_allowed = true;

function getKeyboardInput_down(acceptedKeys, fun, state, duration) {
	if (!(acceptedKeys instanceof Array || acceptedKeys === "any")) throw new TypeError();
	
	if (duration) setTimeout(function() {document.onkeydown = null;}, duration);
	var startTime = new Date();
	
	
	document.onkeyup = function(e) {
	
	is_onkeydown_allowed = true;
	}
	
	document.focus = function(e) {
	is_onkeydown_allowed = true;
	}
	
	
	// monitor for keypresses
	document.onkeydown = function(e) {
		if (is_onkeydown_allowed) { 
		var e = e || window.event;
		var v = e.charCode || e.keyCode;
		var value = keyValue(v);
		// ignore keys pressed not in acceptedKeys
		// e.g. if user accidentally pressed another key
		if (acceptedKeys === "any" || acceptedKeys.contains(value)) {
			// IE
			e.returnValue = false;
			e.cancelBubble = true;

			if (e.preventDefault) {
				e.preventDefault();
				e.stopPropagation();
			}
			
			var endTime = new Date();
			var input = {response: value, rt: endTime - startTime};
			fun(input, state);
			is_onkeydown_allowed = false;
			return false;
		}
		}
	
	}
}