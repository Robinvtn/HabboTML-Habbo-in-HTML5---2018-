function goToCategory(id) {
	ajaxpage('pages.php?id='+id, 'content_body');
	$("#nav_body div.submenu").css({ "display":"none" });
	$("#nav_body div#sub3").css({ "display":"block" });
	$("#sub3").animate({ scrollTop: 0 }, 1, function() {
		var p = $("a#category-"+id);
		var position = p.position();
		$("#sub3").animate({ scrollTop: position.top-112 }, 1);
	});	
}