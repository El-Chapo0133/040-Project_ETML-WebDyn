function myMove() {
	var elem = document,getElementById("btn");
	var pos = 0;
	var id = setInterval(frame, 0);
	function frame() {
	  	if (pos == 350) {
	    		clearInterval(id);
	  	} else {
	    		pos++; 
	    		elem.style.left = pos + "px"; 
		}
	}
}
