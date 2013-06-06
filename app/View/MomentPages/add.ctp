<?php echo $this->Html->css('PhotoSelector'); ?>
<?php echo $this->Html->script('photo_selector'); ?>

<script type="text/javascript">
	var buttonOK = $('a#CSPhotoSelector_buttonOK');
	var o = this;
  
fbphotoSelect = function(id, idpapa) {
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
			console.log(photo.source);
			console.log(' ehmem == > '+idpapa);
			$('#photo_url_').val(photo.source);
			$('#photo_moment').css('background-image','url(../img/marco_whoami.png), url('+photo.source+')');
			$('#photo_moment').css('background-size', '297px 392px, 225px 320px');
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
		    elpapa = $(this).parent().get(0).id;
		    id = null;
		    if ( $(this).attr('data-id') ) id = $(this).attr('data-id');
		    fbphotoSelect(id, elpapa); 
		});

	});


function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
          	$('#photo_moment').css('background-image','url(../img/marco_whoami.png), url('+e.target.result+')');
			$('#photo_moment').css('background-size', '297px 392px, 225px 320px');
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
<?php echo $this->element('menu', array( "trimestre" => $this->request->params['pass'][0], 'pag' => 'none' )); ?>

<?php
		echo $this->Html->link(
				    'Add Moment',
				    array('controller' => 'moment_pages', 'action' => 'add', 0, $this->request->params['pass'][0]),
				    array('class' => 'add_moment')
				);
	?>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => $this->request->params['pass'][0])); ?>

<div class="page_title">
	<div class="ant">Anterior</div>
	<div class="title_page">
		<p></p>
		<span></span>
	</div>
	<div class="sig">Siguiente</div>
</div>

	<div class="momentPages form">
<?php echo $this->Form->create('MomentPage'); ?>
  
  <?php
		if(isset($moment['MomentPage']['title'])){
			$title = $moment['MomentPage']['title'];
		} else{
			$title = '';
		}
		if(isset($moment['MomentPage']['subtitle'])){
			$subtitle = $moment['MomentPage']['subtitle'];
		} else{
			$subtitle = '';
		}

		if(isset($moment['MomentPage']['description'])){
			$description = $moment['MomentPage']['description'];
		} else{
			$description = '';
		}
		if(isset($moment['MomentPage']['id'])){
			$id_ = $moment['MomentPage']['id'];
		} else{
			$id_ = '';
		}
  ?>
 	<input type="text" name="data[MomentPage][title]" value="<?php if($title != ''){ echo $title; } ?>"/>  
 	<input type="text" name="data[MomentPage][subtitle]" value="<?php if($subtitle != ''){ echo $subtitle; } ?>"/>  

      <div class="photo-up" id="photo_moment">
        <input type="hidden" name="data[MomentPage][url_photo]" id="photo_url_" value=""/>
        <div class="pick_fb">Elegir de Facebook</div>
        <?php
          echo $this->Form->file('photo', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
        ?>
      </div>
      <input type="text" name="data[MomentPage][description]" value="<?php if($description != ''){ echo $description; } ?>"/>  

	<?php
		echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
		echo $this->Form->input('trimester', array('type' => 'hidden', 'value' => $trim));
		echo $this->Form->input('id', array('type' => 'hidden', 'value' => $id_));

	?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>