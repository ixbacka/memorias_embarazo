
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


<?php if( isset($familytree['FamilytreePage']['grandpa_dad_img']) ){ ?>
#grandpa_dad{
	background-image: url(../img/marco_circular.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['grandpa_dad_img']); ?>);
	background-size: 186px 186px,  120px 120px;
	border-radius: 120px;
	height: 150px;width: 150px;
	border-radius: 150px;
	background-position: -15px -15px, center 9px;
	background-size: 186px 186px, 140px 140px;
margin-left: 30px;
margin-top: 50px;
}
<?php }?>


<?php if( isset($familytree['FamilytreePage']['grandpa_mom_img']) ){ ?>
#grandpa_mom{
	background-image: url(../img/marco_circular.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['grandpa_mom_img']); ?>);
	background-size: 186px 186px,  120px 120px;
	border-radius: 120px;
	height: 150px;width: 150px;
	border-radius: 150px;
	background-position: -15px -15px, center 9px;
	background-size: 186px 186px, 140px 140px;
margin-left: 30px;
margin-top: 50px;
}
<?php }?>


<?php if( isset($familytree['FamilytreePage']['grandma_dad_img']) ){ ?>
#grandma_dad{
	background-image: url(../img/marco_circular.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['grandma_dad_img']); ?>);
	background-size: 186px 186px,  120px 120px;
	border-radius: 120px;
	height: 150px;width: 150px;
border-radius: 150px;
background-position: -15px -15px, center 9px;
background-size: 186px 186px, 140px 140px;
margin-left: 30px;
margin-top: 50px;
}
<?php }?>


<?php if( isset($familytree['FamilytreePage']['grandma_mom_img']) ){ ?>
#grandma_mom{
	background-image: url(../img/marco_circular.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['grandma_mom_img']); ?>);
	background-size: 186px 186px,  120px 120px;
	border-radius: 120px;
	height: 150px;width: 150px;
border-radius: 150px;
background-position: -15px -15px, center 9px;
background-size: 186px 186px, 140px 140px;
margin-left: 30px;
margin-top: 50px;
}
<?php }?>


<?php if( isset($familytree['FamilytreePage']['dad_img']) ){ ?>
#dad{
	background-image: url(../img/marco_circular.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['dad_img']); ?>);
	background-size: 186px 186px,  120px 120px;
	border-radius: 120px;

height: 150px;width: 150px;
border-radius: 150px;
background-position: -15px -15px, center 9px;
background-size: 186px 186px, 140px 140px;
margin-left: 30px;
margin-top: 50px;

}
<?php }?>

<?php if( isset($familytree['FamilytreePage']['mom_img']) ){ ?>
#mom{
	background-image: url(../img/marco_circular.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['mom_img']); ?>);
	background-size: 186px 186px,  120px 120px;
	border-radius: 120px;
	height: 150px;width: 150px;
border-radius: 150px;
background-position: -15px -15px, center 9px;
background-size: 186px 186px, 140px 140px;
margin-left: 30px;
margin-top: 50px;

}
<?php }?>

<?php if( isset($familytree['FamilytreePage']['baby_img']) ){ ?>
#baby{
	background-image: url(../img/marco_circular.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['baby_img']); ?>);
	background-size: 186px 186px,  120px 120px;
	border-radius: 120px;
	height: 150px;width: 150px;
border-radius: 150px;
background-position: -15px -15px, center 9px;
background-size: 186px 186px, 140px 140px;
margin-left: 30px;
margin-top: 50px;
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
			$('#'+idpapa).css('background-image','url(../img/marco_circular.png), url('+photo.source+')');
			$('#'+idpapa).css('background-size', '186px 186px, 140px 140px');
			$('#'+idpapa).css('border-radius', '150px');
			$('#'+idpapa).css('background-position', '-15px -15px, center 9px');
			$('#'+idpapa).css('height', '150px');
			$('#'+idpapa).css('width', '150px');
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
                  $('#'+elpapa).css('background-image','url(../img/marco_circular.png), url('+e.target.result+')');
									$('#'+elpapa).css('background-size', '186px 186px, 140px 140px');
									$('#'+elpapa).css('border-radius', '150px');
									$('#'+elpapa).css('background-position', '-15px -15px, center 9px');
									$('#'+elpapa).css('height', '150px');
									$('#'+elpapa).css('width', '150px');
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


<?php echo $this->element('menu', array( "trimestre" => 3, "pag" => "familytree")); ?>



<a href="#" class="add_moment" id="my-moments">Moments</a>

    <div id="moments_popup">
        <div id="popup_moments"> <!--your content start-->
          <?php echo $this->element('moments'); ?>
          <a href="3" class="addnew-momento" id="mayiadd-moments" >Agrega un momento</a>
        </div> <!--your content end-->
    </div> <!--toPopup end-->

<div id="dialog-box-momento" class="dialog-popup"></div>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 3)); ?>

<div class="page_title">
	<?php
			echo $this->Html->link(
				    'Anterior',
				    array('controller' => 'newfamily_pages', 'action' => 'add'),
				    array('class' => 'ant')
				);
	?>
	<div class="title_page">
		<p>&aacute;rbol Familiar</p>
		<span></span>
	</div>
</div>
	
<div class="familytreePages form">

<?php echo $this->Form->create('FamilytreePage', array('enctype' => 'multipart/form-data')); ?>
	<div class="familytreeFile" id="grandpa_dad">
		<input type="hidden" name="data[FamilytreePage][grandpa_dad_url][url_photo]" class="grandpa_dad" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('grandpa_dad_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('grandpa_dad', array('placeholder' => 'Nombre del abuelo', 'class' => 'name_input',
				'value' => $familytree['FamilytreePage']['grandpa_dad']));
		?>
	</div>
	<div class="familytreeFile" id="grandpa_mom">
		<input type="hidden" name="data[FamilytreePage][grandpa_mom_url][url_photo]" class="grandpa_mom" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('grandpa_mom_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('grandpa_mom', array('placeholder' => 'Nombre de la abuela', 'class' => 'name_input',
				'value' => $familytree['FamilytreePage']['grandpa_mom']));
		?>
	</div>
	<div class="familytreeFile" id="grandma_dad">
		<input type="hidden" name="data[FamilytreePage][grandma_dad_url][url_photo]" class="grandma_dad" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('grandma_dad_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('grandma_dad', array('placeholder' => 'Nombre del abuelo', 'class' => 'name_input',
				'value' => $familytree['FamilytreePage']['grandma_dad']));
		?>
	</div>
	<div class="familytreeFile" id="grandma_mom">
		<input type="hidden" name="data[FamilytreePage][grandma_mom_url][url_photo]" class="grandma_mom" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('grandma_mom_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('grandma_mom', array('placeholder' => 'Nombre de la abuela', 'class' => 'name_input',
				'value' => $familytree['FamilytreePage']['grandma_mom']));
		?>
	</div>
	<div class="familytreeFile" id="dad">
		<input type="hidden" name="data[FamilytreePage][dad_url][url_photo]" class="dad" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('dad_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('dad', array('placeholder' => 'Nombre del padre', 'class' => 'name_input',
				'value' => $familytree['FamilytreePage']['dad']));
		?>
	</div>	
	<div class="familytreeFile" id="mom">
		<input type="hidden" name="data[FamilytreePage][mom_url][url_photo]" class="mom" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('mom_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('mom', array('placeholder' => 'Nombre de la madre', 'class' => 'name_input',
				'value' => $familytree['FamilytreePage']['mom']));
		?>
	</div>	<br>
	<div class="familytreeFile" id="baby">
		<input type="hidden" name="data[FamilytreePage][baby_url][url_photo]" class="baby" value=""/>
		<div class="pick_fb">Elegir de Facebook</div>
		<?php
			echo $this->Form->file('baby_img', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
			echo $this->Form->input('baby', array('placeholder' => 'Nombre del bebé', 'class' => 'name_input', 
				'value' => $familytree['FamilytreePage']['baby']));
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
			echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
		?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
	<div class="footer">
		<div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
		<a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
		<a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
	</div>