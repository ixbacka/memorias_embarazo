<!-- add.ctp -->
<?php //echo $this->Html->script('functions'); ?>
<?php echo $this->Html->css('PhotoSelector'); ?>
<?php echo $this->Html->script('photo_selector'); ?>

<style type="text/css">


<?php if( isset($whoami['WhoamiPage']['photo']) ){ ?>
.whoami_photo_back{
	background-image: url(../img/cover_photos/<?php echo str_replace(' ','%20',$whoami['WhoamiPage']['photo']); ?>);
}
<?php }?>

</style>


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
			$('.whoami_photo_back').css('background-image','url('+photo.source+')');
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
          	$('.whoami_photo_back').css('background-image','url('+e.target.result+')');
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

<?php echo $this->element('menu', array( "trimestre" => 1, 'pag' => 'whoami')); ?>

<a href="#" class="add_moment" id="my-moments">Moments</a>

    <div id="moments_popup">
        <div id="popup_moments"> <!--your content start-->
          <?php echo $this->element('moments'); ?>
          <a href="1" class="addnew-momento" id="mayiadd-moments" >Agrega un momento</a>
        </div> <!--your content end-->
    </div> <!--toPopup end-->

<div id="dialog-box-momento" class="dialog-popup"></div>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 1)); ?>

<div class="page_title">
	<?php

			echo $this->Html->link(
				    'Siguiente',
				    array('controller' => 'first_visit_pages', 'action' => 'add'),
				    array('class' => 'ant')
				);
	?>
	<div class="title_page">Qui&eacute;n Soy Yo...</div>
	<?php

			echo $this->Html->link(
				    'Siguiente',
				    array('controller' => 'sintom_pages', 'action' => 'add'),
				    array('class' => 'sig')
				);
	?>
</div>

	<div class="congratsPages form">
<?php echo $this->Form->create('WhoamiPage', array('enctype' => 'multipart/form-data')); ?>
	
	<div class="whoami_left">
		<div class="whoami_photo_back"></div>
		<div class="whoami_photo">

			<input type="hidden" name="data[WhoamiPage][url_photo]" id="photo_url_" value=""/>
			<div class="pick_fb">Elegir de Facebook</div>
			<?php
				echo $this->Form->file('photo', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			?>
		</div>
	</div>
	<div class="whoami_right">
	<?php

	if(isset($whoami['WhoamiPage']['name'])){
		$name = $whoami['WhoamiPage']['name'];
	} else{
		$name = '';
	}
		echo $this->Form->input('name', array('label' => 'Yo soy: '
			, 'after' => '</span>','between' => '<span>', 'value' => $name )); 

	if(isset($whoami['WhoamiPage']['age'])){
		$age = $whoami['WhoamiPage']['age'];
	} else{
		$age = '';
	}
		echo $this->Form->input('age', array('label' => 'Tengo ', 'min' => 0, 'max' => 100, 'after' => ' años </p>','between' => ' ', 'before'=> '<p>', 'value' => $age));


			if(isset($whoami['WhoamiPage']['profesion'])){
				$profesion = $whoami['WhoamiPage']['profesion'];
			} else{
				$profesion = '';
			}

			echo $this->Form->input('profesion', array('label' => 'Me dedico a: ','after' => '</span>','between' => '<span>', 'value' => $profesion));

			if(isset($whoami['WhoamiPage']['location'])){
				$location = $whoami['WhoamiPage']['location'];
			} else{
				$location = '';
			}
		echo $this->Form->input('location',array('label' => 'Vivo en: ', 'after' => '</span>','between' => '<span>', 'value' => $location));

			if(isset($whoami['WhoamiPage']['dadsname'])){
				$dadsname = $whoami['WhoamiPage']['dadsname'];
			} else{
				$dadsname = '';
			}
		echo $this->Form->input('dadsname',array('label' => 'Y el papá: ', 'after' => '</span>','between' => '<span>', 'value' => $dadsname));

			if(isset($whoami['WhoamiPage']['remember'])){
				$remember = $whoami['WhoamiPage']['remember'];
			} else{
				$remember = '';
			}
		echo $this->Form->input('remember',array('label' => 'El día de mañana quiero recordar que yo: ', 'value' => $remember));
	?>
		<?php
			echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
		?>	
		<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
	<div class="footer">
		<div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
		<a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
		<a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
	</div>