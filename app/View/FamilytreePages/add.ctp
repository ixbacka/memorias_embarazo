
<?php echo $this->Html->css('PhotoSelector'); ?>
<?php echo $this->Html->script('photo_selector'); ?>

<style type="text/css">
body{
	height: 1200px;
}
.footer{
	position: absolute;
	top: 950px;
}
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
			//$('.cover_photo').css('background-image','url(../img/marco.png), url('+photo.source+')');
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
				    array('class' => 'first_trim')
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
	<div class="ant">Anterior</div>
	<div class="title_page">&aacute;rbol Familiar</div>
	<div class="sig">Siguiente</div>
</div>

<div class="familytreePages form">

<?php echo $this->Form->create('FamilytreePage', array('enctype' => 'multipart/form-data')); ?>
	<div class="familytreeFile" id="grandpa_dad">
		<input type="hidden" name="data[FamilytreePage][grandpa_dad][url_photo]" class="grandpa_dad" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('grandpa_dad_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('grandpa_dad', array('placeholder' => 'Nombre del abuelo', 'class' => 'name_input'));
		?>
	</div>
	<div class="familytreeFile" id="grandpa_mom">
		<input type="hidden" name="data[FamilytreePage][grandpa_mom][url_photo]" class="grandpa_mom" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('grandpa_mom_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('grandpa_mom', array('placeholder' => 'Nombre de la abuela', 'class' => 'name_input'));
		?>
	</div>
	<div class="familytreeFile" id="grandma_dad">
		<input type="hidden" name="data[FamilytreePage][grandma_dad][url_photo]" class="grandma_dad" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('grandma_dad_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('grandma_dad', array('placeholder' => 'Nombre del abuelo', 'class' => 'name_input'));
		?>
	</div>
	<div class="familytreeFile" id="grandma_mom">
		<input type="hidden" name="data[FamilytreePage][grandma_mom][url_photo]" class="grandma_mom" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('mom_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('grandma_mom', array('placeholder' => 'Nombre de la abuela', 'class' => 'name_input'));
		?>
	</div>
	<div class="familytreeFile" id="dad">
		<input type="hidden" name="data[FamilytreePage][dad][url_photo]" class="dad" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('dad_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('dad', array('placeholder' => 'Nombre del padre', 'class' => 'name_input'));
		?>
	</div>	
	<div class="familytreeFile" id="mom">
		<input type="hidden" name="data[FamilytreePage][mom][url_photo]" class="mom" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('mom_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('mom', array('placeholder' => 'Nombre de la madre', 'class' => 'name_input'));
		?>
	</div>	<br>
	<div class="familytreeFile" id="baby">
		<input type="hidden" name="data[FamilytreePage][baby][url_photo]" class="baby" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('baby_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('baby', array('placeholder' => 'Nombre del bebé', 'class' => 'name_input'));
		?>
	</div>		
		<?php
			/*echo $this->Form->input('grandpa_dad');
			echo $this->Form->input('grandma_dad');
			echo $this->Form->input('grandpa_mom');
			echo $this->Form->input('grandma_mom');
			echo $this->Form->input('grandpa_dad_img');
			echo $this->Form->input('grandma_dad_img');
			echo $this->Form->input('grandpa_mom_img');
			echo $this->Form->input('grandma_mom_img');
			echo $this->Form->input('mom');
			echo $this->Form->input('dad');
			echo $this->Form->input('mom_img');
			echo $this->Form->input('dad_img');
			echo $this->Form->input('baby');
			echo $this->Form->input('baby_img');*/
			echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => 'estaid'));//$profileid));
		?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
	<div class="footer">
		<div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
		<a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
		<a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
	</div>