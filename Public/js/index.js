$(function(){

	$(".shopClass").hover(function(){
		$(this).css("background-color","#4593FD");
		$(".shopClass_show").fadeIn();
	},
		function(){
			$(this).css("background-color","");
			$(".shopClass_show").fadeOut();
	});

	$(".imgA").click(function(){

		var imgid = $(this).attr("imgid");
		$(".imgA").removeClass("active");
		$(this).addClass("active");

		$(".imgBoxLi").fadeOut();
		$(".img"+imgid).fadeIn();
	});

})

// function turnImg(){


// }

