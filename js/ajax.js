"use strict";

function showHint(str) {
}

function showResults() {

}

$(document).ready(function() {
	$("#btn-set-plant-category-flowers").click(function () {
		$.post("modules/searchresults.php", 'category=flor', (response) => {
			$("#container-results").html(response);
		});
	});
	$("#btn-set-plant-category-cacti").click( function () {
		$.post("modules/searchresults.php", 'category=cacto', (response) => {
			$("#container-results").html(response);
		});
	});
	$("#btn-set-plant-category-palmtrees").click( function () {
		$.post("modules/searchresults.php", 'category=palmeira', (response) => {
			$("#container-results").html(response);
		});
	});

	$("#main-header #btn-search").click(function () {
		let val = $("#search-field").val();
		if (val != '') {
			$.post("modules/searchresults.php", 'category=palmeira', (response) => {
				console.log("hi");
				$("#container-results").html(response);
			});
		}
	});
});
