<!-- cover.ctp -->
<STYLE TYPE="text/css">
<?php if( isset($cover_pic) ){ ?>

.cover_photo{
	width: 392px;
	height: 297px;
	position: absolute;
	left: 209px;
	background-image: url(../img/marco.png), url(../img/cover_photos/<?php echo str_replace(' ', '%20', $cover_pic); ?>);
	background-position: top left, center center;
	background-size: 392px 297px,  329px 265px;
	background-repeat: no-repeat;
	text-indent: -9999px;
}
<?php }?>
/*#CSPhotoSelector_buttonOK{
	display: block;
}
#CSPhotoSelector_buttonOK input[type="submit"]{
	background: none;
	border: none;
	box-shadow: none;
	padding: 0;

}*/
</STYLE>
<?php echo $this->Html->css('PhotoSelector'); ?>
<?php echo $this->Html->script('photo_selector'); ?>

<script>
  
	var buttonOK = $('a#CSPhotoSelector_buttonOK');
	var o = this;
  
fbphotoSelect = function(id) {
		// if no user/friend id is sent, default to current user
		if (!id) id = 'me';
		
		callbackAlbumSelected = function(albumId) {
			var album, name;
			album = CSPhotoSelector.getAlbumById(albumId);
			// show album photos
			selector.showPhotoSelector(null, album.id);
		};

		callbackAlbumUnselected = function(albumId) {
			var album, name;
			album = CSPhotoSelector.getAlbumById(albumId);
		};

		callbackPhotoSelected = function(photoId) {
			var photo;
			photo = CSPhotoSelector.getPhotoById(photoId);
			buttonOK.show();
			// console.log('is this working? ');
			// buttonOK.css('display', 'inline-block');
			// buttonOK.css('marginTop', -2);
			// console.log(buttonOK);
			$('a#CSPhotoSelector_buttonOK').css('display', 'block');
			//logActivity('Selected ID: ' + photo.id);
		};

		callbackPhotoUnselected = function(photoId) {
			var photo;
			album = CSPhotoSelector.getPhotoById(photoId);
			buttonOK.hide();
			$('a#CSPhotoSelector_buttonOK').css('display', 'none');

		};

		callbackSubmit = function(photoId) {
			var photo;
			photo = CSPhotoSelector.getPhotoById(photoId);

			//logActivity('<br><strong>Submitted</strong><br> Photo ID: ' + photo.id + '<br>Photo URL: ' + photo.source + '<br>');
			// guardar img como portada , agregar a hidden field , y que lo mande .. inmediately ? 
			$('#url_photo_fb').val(photo.source);
			$('.cover_photo').css('background-image','url(../img/marco.png), url('+photo.source+')');
			$('.cover_photo').css('background-size', '392px 297px,  329px 265px');
		};


		// Initialise the Photo Selector with options that will apply to all instances
		CSPhotoSelector.init({debug: true});

		// Create Photo Selector instances
		selector = CSPhotoSelector.newInstance({
			callbackAlbumSelected	: callbackAlbumSelected,
			callbackAlbumUnselected	: callbackAlbumUnselected,
			callbackPhotoSelected	: callbackPhotoSelected,
			callbackPhotoUnselected	: callbackPhotoUnselected,
			callbackSubmit			: callbackSubmit,
			maxSelection			: 1,
			albumsPerPage			: 6,
			photosPerPage			: 200,
			autoDeselection			: true
		});

		// reset and show album selector
		selector.reset();
		selector.showAlbumSelector(id);
	}

  $(document).ready(function(){
  	
  	$(".pick_fb").click(function (e) {
		    e.preventDefault();
		    id = null;
		    if ( $(this).attr('data-id') ) id = $(this).attr('data-id');
		    fbphotoSelect(id);
		});

	});

	 function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
                  $('.cover_photo').css('background-image','url(../img/marco.png), url('+e.target.result+')');
									$('.cover_photo').css('background-size', '392px 297px,  329px 265px');
          };
          reader.readAsDataURL(input.files[0]);
      }
  }

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
			
			<?php echo $this->Form->create('Profile', array('enctype' => 'multipart/form-data')); ?>
				
				<input type="hidden" name="data[Profile][url_photo]" id="url_photo_fb" value=""/>

				<?php	

					$options = array(
				    'label' => 'OK',
				    'div' => array(
				    		'id' => 'send_OK'
				    	)		    
					);

					echo $this->Form->file('file', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
				?>
			<?php echo $this->Form->end($options); ?>

			<!--div class="upload_bt">Subir un archivo</div-->
		
		</div>
		<p class="whatdo">Qu&eacute; quieres hacer?</p>

		<div class="cover_menu">
			<?php
				echo $this->Html->link(
				    'Escribir Diario',
				    array('controller' => 'familytree_pages', 'action' => 'add'),
				    array('class' => 'write_bt')
				);
			 ?>
			<!-- <div class="write_bt">Escribir diario</div> -->
			<div class="share_bt">Compartir</div>
			<?php
				// echo $this->Html->link(
				//     'Ver Diario',
				//     array('controller' => 'familytree_pages', 'action' => 'view'),
				//     array('class' => 'watch_bt')
				// );
			 ?>
			<div class="watch_bt">Ver Diario</div>
		</div>
		<div class="instructions_bt">Instrucciones</div>

	</div>
	<div class="footer">
		<div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
		<a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
		<a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
	</div>

</div>