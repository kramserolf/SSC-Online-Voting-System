$(document).ready(function(){
	// pres
	$(".pres").on("change", function(){
		if ($(".pres:checked").length ==1) {
			$(".pres").attr("disabled", "disabled");
			$(".pres:checked").removeAttr("disabled");
		} else {
			$(".pres").removeAttr("disabled");
		}
	});
	// vice pres
	$(".vpres").on("change", function(){
		if ($(".vpres:checked").length ==1) {
			$(".vpres").attr("disabled", "disabled");
			$(".vpres:checked").removeAttr("disabled");
		} else {
			$(".vpres").removeAttr("disabled");
		}
	});
		// secretary
	$(".sec").on("change", function(){
		if ($(".sec:checked").length ==1) {
			$(".sec").attr("disabled", "disabled");
			$(".sec:checked").removeAttr("disabled");
		} else {
			$(".sec").removeAttr("disabled");
		}
	});
	// treasurer
	$(".treas").on("change", function(){
		if ($(".treas:checked").length ==1) {
			$(".treas").attr("disabled", "disabled");
			$(".treas:checked").removeAttr("disabled");
		} else {
			$(".treas").removeAttr("disabled");
		}
	});
		// auditor
	$(".aud").on("change", function(){
		if ($(".aud:checked").length ==1) {
			$(".aud").attr("disabled", "disabled");
			$(".aud:checked").removeAttr("disabled");
		} else {
			$(".aud").removeAttr("disabled");
		}
	});
	// business manager
	$(".bus").on("change", function(){
		if ($(".bus:checked").length ==1) {
			$(".bus").attr("disabled", "disabled");
			$(".bus:checked").removeAttr("disabled");
		} else {
			$(".bus").removeAttr("disabled");
		}
	});
	// sgt male
	$(".sgt_male").on("change", function(){
		if ($(".sgt_male:checked").length ==1) {
			$(".sgt_male").attr("disabled", "disabled");
			$(".sgt_male:checked").removeAttr("disabled");
		} else {
			$(".sgt_male").removeAttr("disabled");
		}
	});
	// sgt_female
	$(".sgt_female").on("change", function(){
		if ($(".sgt_female:checked").length ==1) {
			$(".sgt_female").attr("disabled", "disabled");
			$(".sgt_female:checked").removeAttr("disabled");
		} else {
			$(".sgt_female").removeAttr("disabled");
		}
	});
	// religious
	$(".rel").on("change", function(){
		if ($(".rel:checked").length ==1) {
			$(".rel").attr("disabled", "disabled");
			$(".rel:checked").removeAttr("disabled");
		} else {
			$(".rel").removeAttr("disabled");
		}
	});
	// socio
	$(".socio").on("change", function(){
		if ($(".socio:checked").length ==1) {
			$(".socio").attr("disabled", "disabled");
			$(".socio:checked").removeAttr("disabled");
		} else {
			$(".socio").removeAttr("disabled");
		}
	});
	// sports
	$(".sports").on("change", function(){
		if ($(".sports:checked").length ==1) {
			$(".sports").attr("disabled", "disabled");
			$(".sports:checked").removeAttr("disabled");
		} else {
			$(".sports").removeAttr("disabled");
		}
	});
});