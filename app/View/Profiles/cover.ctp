<!-- cover.ctp -->
<?php echo $this->Html->css('PhotoSelector'); ?>
<?php echo $this->Html->script('photo_selector'); ?>


<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '163480813810636',                        // App ID from the app dashboard
      status     : true,                                 // Check Facebook Login status
      xfbml      : true                                  // Look for social plugins on the page
    });

    // Additional initialization code such as adding Event Listeners goes here
  };

  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  CSPhotoSelector.init({debug: true});

  	selector = CSPhotoSelector.newInstance({
		    callbackAlbumSelected   : callbackAlbumSelected,
		    callbackAlbumUnselected : callbackAlbumUnselected,
		    callbackPhotoSelected   : callbackPhotoSelected,
		    callbackPhotoUnselected : callbackPhotoUnselected,
		    callbackSubmit          : callbackSubmit,
		    maxSelection            : 1,
		    albumsPerPage           : 6,
		    photosPerPage           : 200,
		    autoDeselection         : true
		});


  $(document).ready(function(){
  	
  	$(".photoSelect").click(function (e) {
		    e.preventDefault();
		    id = null;
		    if ( $(this).attr('data-id') ) id = $(this).attr('data-id');
		    fbphotoSelect(id);
		});

	});

</script>


<!-- Markup for Carson Shold's Photo Selector -->
		<div id="CSPhotoSelector">
			<div class="CSPhotoSelector_dialog">
				<a href="#" id="CSPhotoSelector_buttonClose">x</a>
				<div class="CSPhotoSelector_form">
					<div class="CSPhotoSelector_header">
						<p>Choose from Photos</p>
					</div>

					<div class="CSPhotoSelector_content CSAlbumSelector_wrapper">
						<p>Browse your albums until you find a picture you want to use</p>
						<div class="CSPhotoSelector_searchContainer CSPhotoSelector_clearfix">
							<div class="CSPhotoSelector_selectedCountContainer">Select an album</div>
						</div>
						<div class="CSPhotoSelector_photosContainer CSAlbum_container"></div>
					</div>

					<div class="CSPhotoSelector_content CSPhotoSelector_wrapper">
						<p>Select a new photo</p>
						<div class="CSPhotoSelector_searchContainer CSPhotoSelector_clearfix">
							<div class="CSPhotoSelector_selectedCountContainer"><span class="CSPhotoSelector_selectedPhotoCount">0</span> / <span class="CSPhotoSelector_selectedPhotoCountMax">0</span> photos selected</div>
							<a href="#" id="CSPhotoSelector_backToAlbums">Back to albums</a>
						</div>
						<div class="CSPhotoSelector_photosContainer CSPhoto_container"></div>
					</div>

					<div id="CSPhotoSelector_loader"></div>


					<div class="CSPhotoSelector_footer CSPhotoSelector_clearfix">
						<a href="#" id="CSPhotoSelector_pagePrev" class="CSPhotoSelector_disabled">Previous</a>
						<a href="#" id="CSPhotoSelector_pageNext">Next</a>
						<div class="CSPhotoSelector_pageNumberContainer">
							Page <span id="CSPhotoSelector_pageNumber">1</span> / <span id="CSPhotoSelector_pageNumberTotal">1</span>
						</div>
						<a href="#" id="CSPhotoSelector_buttonOK">OK</a>
						<a href="#" id="CSPhotoSelector_buttonCancel">Cancel</a>
					</div>
				</div>
			</div>
		</div>
<!-- Markup for Carson Shold's Photo Selector -->



<div class="cover">
	<div class="header">	

		<ul class="menu">
			<li class="ask">FAQ</li>
			<li class="settings">Settings</li>
			<li class="home">Home</li>
		</ul>
	</div>
	<div class="content">
		<div class="cover_photo">
			
			<p>Pon una foto de portada aqu&iacute;</p>

			<div class="pick_fb">Elegir de Facebook</div>
			<div class="upload_bt">Subir un archivo</div>
		
		</div>
		<p class="whatdo">Qu&eacute; quieres hacer?</p>

		<div class="cover_menu">
			<div class="write_bt">Escribir diario</div>
			<div class="share_bt">Compartir</div>
			<div class="watch_bt">Ver Diario</div>
		</div>
		<div class="instructions_bt">Instrucciones</div>

	</div>
	<div class="footer">
		<div class="footer_mtm">Mom to mom , Consintiendo mi piel de mama</div>
		<a href="http://www.momtomom.com.mx/" class="footer_link">www.momtomom.mx</a>
		<a href="https://twitter.com/momtomommx" class="footer_twitter">@momtomommx</a>
	</div>

</div>