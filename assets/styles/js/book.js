function openBook(page) {
	$.get("book/"+page, function(data) {
		$("#blackBg").attr("style","z-index:100; display:block; background-color:rgba(0, 0, 0, 0.8);");
		$("#moreBook_scroll").html(data);
		$("#moreBook").fadeIn(700, function() { $("#moreBook_scroll").animate({scrollTop:0},700); });
	});
}

function closeBook() {
	$("#blackBg").attr("style","z-index:0; display:none; background-color:rgba(0, 0, 0, 0);");
	$("#moreBook").fadeOut(700, function() { $("#moreBook_scroll").html(""); });
}