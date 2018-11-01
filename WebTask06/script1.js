var buttons = document.querySelectorAll("#tasks button");

for (var i = 0; i < buttons.length; i++) {
	buttons[i].addEventListener('click', do_it);
}

function do_it() {
	this.parentNode.setAttribute("data-status", "done");
}