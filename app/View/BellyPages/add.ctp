
<?php echo $this->Html->css('PhotoSelector'); ?>
<?php echo $this->Html->script('photo_selector'); ?>
<?php echo $this->Html->script('functions'); ?>

<style type="text/css">
body{
	height: 1170px;
	overflow: hidden;
}
.footer{
	position: absolute;
	top: 970px;
	left: 0px;
}

form div.submit{
	position: absolute;
	top: 765px;
	left: 350px;
	z-index: 9999;
}

form .submit input[type=submit]{
	background-image: url(../img/bt_aceptar.png);
width: 55px;
height: 55px;
border: none;
background-color: transparent;
box-shadow: none;
text-indent: -9999px;
cursor: pointer;
}

form .submit input[type=submit]:hover{
	background-image: url(../img/bt_aceptar.png);
	background-color: rgba(0,0,0,0.3);
	border-radius: 25px;
}


<?php if( isset($belly['BellyPage']['photo1']) ){ ?>
#photo1{
	background-image: url(../img/marco_circular.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$belly['BellyPage']['photo1']); ?>);
}
<?php }?>


<?php if( isset($belly['BellyPage']['photo2']) ){ ?>
#photo2{
	background-image: url(../img/marco_circular.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$belly['BellyPage']['photo2']); ?>);
}
<?php }?>


<?php if( isset($belly['BellyPage']['photo3']) ){ ?>
#photo3{
	background-image: url(../img/marco_circular.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$belly['BellyPage']['photo3']); ?>);
	
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
			$('.'+idpapa).val(photo.source);
			$('#'+idpapa).css('background-image','url(../img/marco.png), url('+photo.source+')');
			//$('.cover_photo').css('background-size', '392px 297px,  329px 265px');
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
      		var elpapa = $(input).parent().get(0).id;
          var reader = new FileReader();
          reader.onload = function (e) {
                  $('#'+elpapa).css('background-image','url(../img/marco.png), url('+e.target.result+')');
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


	<div class="header">	
		<ul class="menu">
			<li class="ask">FAQ</li>
			<li class="settings">Settings</li>
			<li class="home">Home</li>
		</ul>
	</div>

<ul class="vertical_menu_1">
	<li>
	<?php 
		//congrats
		echo $this->Html->link(
				    'Felicidades',
				    array('controller' => 'congrats_pages', 'action' => 'add')
				);
		?>
	</li>
	<li>
		<?php
		echo $this->Html->link(
				    'Primer Visita',
				    array('controller' => 'first_visit_pages', 'action' => 'add')
				); ?>
		</li>
		<li>
		<?php
		echo $this->Html->link(
				    'Quién soy',
				    array('controller' => 'whoami_pages', 'action' => 'add')
				);
		?>
		</li>
		<li>
		<?php
		echo $this->Html->link(
				    'Primeros síntomas',
				    array('controller' => 'sintom_pages', 'action' => 'add')
				);
		?>
		</li>
		<li>
			<?php
		echo $this->Html->link(
				    'Ultrasonido',
				    array('controller' => 'ultrasound_pages', 'action' => 'add')
				);
		?>
		</li>
		<li>
		<?php
		echo $this->Html->link(
				    'Mi pancita',
				    array('controller' => 'belly_pages', 'action' => 'add')
				);
		?>
		</li>
		<li>
		<?php
		echo $this->Html->link(
				    'Mi ánimo',
				    array('controller' => 'animo_pages', 'action' => 'add')
				);
		?>
		</li>
</ul>
<?php
		echo $this->Html->link(
				    'Add Moment',
				    array('controller' => 'moment_pages', 'action' => 'add'),
				    array('class' => 'add_moment')
				);
	?>

<div class="content">
	<div class="menu_trims">
		<?php 
			echo $this->Html->link(
				    'Primer Trimestre',
				    array('controller' => 'familytree_pages', 'action' => 'add'),
				    array('class' => 'first_trim_current')
				);
			echo $this->Html->link(
				    'Segundo Trimestre',
				    array('controller' => 'familytree_pages', 'action' => 'add'),
				    array( 'class' => 'second_trim')
				);
			echo $this->Html->link(
				    'Tercer Trimestre',
				    array('controller' => 'familytree_pages', 'action' => 'add'),
				    array('class' => 'third_trim')
				);
		?>
	</div>

<div class="page_title">
	<?php

			echo $this->Html->link(
				    'Siguiente',
				    array('controller' => 'ultrasound_pages', 'action' => 'add'),
				    array('class' => 'ant')
				);
	?>

	<div class="title_page"><p>Mi pancita</p>
		<span>mes a mes</span></div>
	<?php

			echo $this->Html->link(
				    'Siguiente',
				    array('controller' => 'animo_pages', 'action' => 'add'),
				    array('class' => 'sig')
				);
	?>
</div>

<div class="bellyPages form">

<?php echo $this->Form->create('BellyPage', array('enctype' => 'multipart/form-data')); ?>

	<div class="bellyFile" id="photo1">
		<input type="hidden" name="data[BellyPage][photo1_url][url_photo]" class="photo1" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('grandpa_dad_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
		?>
		<p>Mes 1</p>
	</div>
	<div class="bellyFile" id="photo2">
		<input type="hidden" name="data[BellyPage][photo2_url][url_photo]" class="photo2" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('photo2', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
		?>
		<p>Mes 2</p>
	</div>
	<div class="bellyFile" id="photo3">
		<input type="hidden" name="data[BellyPage][photo3_url][url_photo]" class="photo3" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('grandma_dad_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
		?>
		<p>Mes 3</p>
	</div>
		<?php
			//no borrar, para poder verla en local, pero debes de descomentarla para subirla al server
			//echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
		?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
	<div class="footer">
		<div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
		<a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
		<a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
	</div>
