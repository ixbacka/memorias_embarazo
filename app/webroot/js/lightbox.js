/****************************************
	Barebones Lightbox Template
	by Kyle Schaeffer
	kyleschaeffer.com
	* requires jQuery
****************************************/

// display the lightbox
function lightbox(insertContent, ajaxContentUrl){
	// add lightbox/shadow <div/>'s if not previously added
	if($('#lightbox').size() == 0){
		var theLightboxW = $('<div id="lightbox_wrapper"/>');		
		var theLightbox = $('<div id="lightbox"/>');
		var theShadow = $('<div id="lightbox-shadow"/>');

		$(theShadow).click(function(e){
			closeLightbox();
		});


		$('body').append(theShadow);
		$('body').append(theLightboxW);
		$(theLightboxW).append(theLightbox);

		
	}

	// remove any previously added content
	$('#lightbox').empty();

	// insert HTML content
	if(insertContent != null){
		
		var n=insertContent.indexOf("img");
		if(n >= 0){
			var sub = insertContent.substring(n+4);
			$('#lightbox').append("<div id='close-Lightbox'>cerrar</div><p>"+insertContent.substring(0,n)+"</p><img src='"+sub+"' style='width: 300px;'>");
			$('#close-Lightbox').click(function(e){
				closeLightbox();
			});
		} else {
			$('#lightbox').append(insertContent);
		}
	}

	// insert AJAX content
	if(ajaxContentUrl != null){
		// temporarily add a "Loading..." message in the lightbox
		$('#lightbox').append('<p class="loading">Loading...</p>');

		// request AJAX content
		$.ajax({
			type: 'GET',
			url: ajaxContentUrl,
			success:function(data){
				// remove "Loading..." message and append AJAX content
				$('#lightbox').empty();
				$('#lightbox').append(data);
			},
			error:function(){
				alert('AJAX Failure!');
			}
		});
	}

	// move the lightbox to the current window top + 100px
	//$('#lightbox').css('top', $(window).scrollTop() + 100 + 'px');
	
	//$('#lightbox').css('')

	// display the lightbox
	$('#lightbox').show();
	$('#lightbox-shadow').show();
	/*window.parent.$("body").animate({scrollTop:0}, 'slow');*/

}


// close the lightbox
function closeLightbox(){

	// hide lightbox and shadow <div/>'s
	$('#lightbox').hide();
	$('#lightbox-shadow').hide();

	// remove contents of lightbox in case a video or other content is actively playing
	$('#lightbox').empty();
}