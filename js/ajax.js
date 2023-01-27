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
});
