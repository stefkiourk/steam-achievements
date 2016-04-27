$(document).ready(function(){

	var areHidden = false;
	
	$("#hideme").click(function(event){
	
		if (areHidden == false){
		
			$("img.noAchievements").fadeOut("slow");
			$("#hideme").html('Unhide games with no achievements');
			areHidden = true;
		}else{
		
			$("img.noAchievements").fadeIn("slow");
			$("#hideme").html('Hide games with no achievements');
			areHidden = false;
		
		}
	
	
	});
	
	$("#main").fadeIn("slow");
	
	$("#loader").hide();
	
	$("a").click(function(event){
  	
		$(this).effect("pulsate", { times:4 }, 100);
		
	
		event.preventDefault();
		
	});
	

	$("#unameform").submit(function(event){
	areHidden = false;
	event.preventDefault();
	
	
	$("#main").fadeOut("slow");
	$("#loader").fadeIn("slow");
			$.ajax({
				type: "GET",
				data: "data=" + $("#data").val(),
				url: "php/games.php",
				cache: false
			}).done(function( html ) {
		$("#main").html(html);
		
		$("#loader").fadeOut("slow");
		$("#main").fadeIn("slow");
		});
	});
	
		$("#gamesform").submit(function(event){
		
			event.preventDefault();
			
			$('img.noAchievements').appendTo("#noach");
			$('img.noAchievements').hide();
		});
});




