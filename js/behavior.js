"use strict";

function toggleMenu() {
	let state = $(".dropdown-content").prop("display");
	if (state != "flex") {
		let dc = $(".dropdown-content");
		let dcChildren = $(".dropdown-content > a");
		let dcChildrenEven = $(".dropdown-content > a:nth-child(even)");

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
			"border": "1px solid var(--gold)"
		});

		dcChildren.css({ "font-size": "1.2rem" });
		dcChildrenEven.css({ "margin": "10px" } );
	} else {
		$(".dropdown-content").css("display", "none");
		$(".dropdown-content").prop("display", "none");
	}
}
