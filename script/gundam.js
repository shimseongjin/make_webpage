$(document).ready(function() {
	
	$("#btn").click(function() {
		if($(this).text() == "표시 안함"){
		$(this).text("표시");
		}
		else{
			$(this).text("표시 안함");
		}
		
		$(".model").slideToggle(1000);
		
	});
	$("h3").click(function() {
		$(this).siblings().slideToggle(100);
		
	});
	// $("#refresh").click(function() {
		// $(this).siblings().slideToggle(100);
		
	// });
	$("#refresh").click(function() {
		//$(".model").empty();
		$.ajax({
			url: "listreview.php",
			cache: false,
			dataType: "xml",
			success: function(xml) {
				$(xml).find("review").each(function(){
					var review='<article class="review">\
					<div class="img_frame">\
						<img class="user_image"src="' +
							$(this).find("user_image").text() + '" alt="Gundam Picture" />';
					review += '<div class="user_memo"><p>' +
							$(this).find("user_memo").text() + '</p></div>';
					review += '<div class="user_info">';
					review += '<img class="user_thumbnail" src="' +
							$(this).children("user_info").find("user_thumbnail").text() + '" alt="User Image"/>';
					review += '<div class="user_email">' +
							$(this).children("user_info").find("user_email").text() + '</div>';
					review += '<div class="user_date">' + $(this).children("user_date").text() + '</div>';
					review += '</div></div>';
					review += '<section class="review_reply">';
					review += '</section>';
					review += '</article>';
					
					$(".model").append(review);
				});
			}

		});
	});
	// $("#btn").click(function() {
		// $.getJSON("listreviewjson.php",function(json){
			// // alert(json.review.length);
			// $.each(json.review, function() {
				// var review='<article class="review">\
				// <div class="img_frame">\
					// <img class="user_image" src="getpicture.php?reviewid=' +
						// this["reviewid"]+'"alt="Gundam Picture" />';
				// review += '<div class="user_memo"><p>' + this["memo"] + '</p></div>';
				// review += '<div class="user_info">';
				// review += '<img class="user_thumbnail" src="userimage.php?email=' + 
						// this["email"] + '" alt="User Image"/>';
				// review += '<div class="user_email">' + this["email"]+'</div>';
				// review += '<div class="user_date">' + this["time"]+'</div>';
				// review += '</div></div>';
				
				// review += '<section class="review_reply">';
				// review += '<div id="write_reply"><a href="writereplyform.php?reviewid=' + this["reviewid"] + '">댓글 등록</a></div>';
				
				// if(this.reply) {
					// $.each(this.reply, function(){
						// var reply = '<article class="reply">';
						// reply += '<div class="user_reply"><p>' + this["memo"] + '</p></div>';
						// reply += '<div class="user_info">';
						// reply += '<img class="user_thumbnail" src="userimage.php?email=' + 
								// this["email"] + '" alt="User Image"/>';
						// reply += '<div class="user_email">' + this["email"]+'</div>';
						// reply += '<div class="user_date">' + this["time"]+'</div>';
						// reply += '</div>';
						// reply += '</article>';
						
						// review+= reply;
					// });
				// }
				
				// review += '</section>';
				// review += '</article>';
				
				// $(".model").append(review);
			// });
		// });
	// });

	
});