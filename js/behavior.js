"use strict";

function toggleMenu() {
	let state = $(".dropdown-menu .dropdown-content").prop("display");
	if (state != "flex") {
		let dc = $(".dropdown-menu .dropdown-content");
		let dcChildren = $(".dropdown-menu .dropdown-content > a");
		let dcChildrenEven = $(".dropdown-menu .dropdown-content > a:nth-child(even)");

		dc.prop("display", "flex");
		dc.css({
			"display": "flex",
			"flex-direction": "column",
			"justify-content": "center",
			"align-items": "center",
			"position": "absolute",
			"width": "180px",
			"height": "140px",
			"border-radius": "5px",
			"top": "101%",
			"background-color": "var(--avocado-green)",
			"color": "var(--graphite-gray)",
			"z-index": "3",
			"border": "1px solid var(--gold)"
		});

		dcChildren.css({ "font-size": "1.2rem" });
		dcChildrenEven.css({ "margin": "10px" } );
	} else {
		$(".dropdown-menu .dropdown-content").css("display", "none");
		$(".dropdown-menu .dropdown-content").prop("display", "none");
	}
}

function toggleUserMenu() {
	let state = $(".dropdown-user-menu .dropdown-content").prop("display");
	if (state != "flex") {
		let dc = $(".dropdown-user-menu .dropdown-content");
		let dcChildren = $(".dropdown-user-menu .dropdown-content > a");
		let dcChildrenEven = $(".dropdown-user-menu .dropdown-content > a:nth-child(even)");

		dc.prop("display", "flex");
		dc.css({
			"display": "flex",
			"flex-direction": "column",
			"justify-content": "center",
			"align-items": "center",
			"position": "absolute",
			"width": "120px",
			"height": "120px",
			"border-radius": "5px",
			"top": "11vh",
			"right": "10px",
			"padding": "10px",
			"background-color": "var(--avocado-green)",
			"color": "var(--graphite-gray)",
			"border": "1px solid var(--gold)"
		});

		dcChildren.css({ "font-size": "1.2rem" });
		dcChildrenEven.css({ "margin": "10px" } );
	} else {
		$(".dropdown-user-menu .dropdown-content").css("display", "none");
		$(".dropdown-user-menu .dropdown-content").prop("display", "none");
	}
}

function isNumberKey(e) {
	var charCode = (e.which) ? e.which : e.keyCode;

	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

function validateRegisterForm() {
	let f1 = $(".form-register input[type=password]");
	return f1[0].value == f1[1].value;
}
