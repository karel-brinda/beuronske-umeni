var count = 0;

function play () {
	msg = psacistroj.innerText;
	comp = msg.length;
	type();
} // end func

function type () {
	if (count <= comp) {
		psacistroj.innerText=msg.substring(0, count);
		count ++;
		setTimeout("type()", 33);
	}
	else {
		count = 20;
	}
} // end func
