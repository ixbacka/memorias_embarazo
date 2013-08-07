<?php 
#Power by nicolaspar 2007 - especific proyect
function get_date_spanish( $time, $part = false, $formatDate = '' ){
    #Declare n compatible arrays
    $month = array("","enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiempre", "diciembre");#n
    $month_execute = "n"; #format for array month

    $month_mini = array("","ENE", "FEB", "MAR", "ABR", "MAY", "JUN", "JUL", "AGO", "SEP", "DIC");#n
    $month_mini_execute = "n"; #format for array month

    $day = array("domingo","lunes","martes","miércoles","jueves","viernes","sábado"); #w
    $day_execute = "w";
    
    $day_mini = array("DOM","LUN","MAR","MIE","JUE","VIE","SAB"); #w
    $day_mini_execute = "w";

    #Content array exception print "HOY", position content the name array. Duplicate value and key for optimization in comparative
    $print_hoy = array("month"=>"month", "month_mini"=>"month_mini");

    if( $part === false ){
        return date("d", $time) . " de " . $month[date("n",$time)] . ", ". date("H:i",$time) ." hs";
    }elseif( $part === true ){
        if( ! empty( $print_hoy[$formatDate] ) && date("d-m-Y", $time ) == date("d-m-Y") ) return "HOY"; #Exception HOY
        if( ! empty( ${$formatDate} ) && !empty( ${$formatDate}[date(${$formatDate.'_execute'},$time)] ) ) return ${$formatDate}[date(${$formatDate.'_execute'},$time)];
        else return date($formatDate, $time);
    }else{
        return date("d-m-Y H:i", $time);
    }
}

?>

<?php echo $this->Html->css('PhotoSelector'); ?>
<?php echo $this->Html->script('photo_selector'); ?>
<?php echo $this->Html->script('jquery-ui/js/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->script('functions'); ?>
<?php echo $this->Html->css('redmond/jquery-ui-1.10.3.custom.min'); ?>

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
			// guardar img como portada , agregar a hidden field , y que lo mande .. inmediately ? 
			console.log(photo.source);
			$('#photo_url_').val(photo.source);
			$('.belly_photo_back').css('background-image','url('+photo.source+')');
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


<?php if(isset($bellymonth['BellymonthPage']['photo_date'])){ 

			$source = $bellymonth['BellymonthPage']['photo_date'];
			$date = new DateTime($source);
			$letime = strtotime($source);

			$mes = get_date_spanish($letime, true, 'month'); # return Enero

			$dia = $date->format('d'); // 31.07.2012
			$ano = $date->format('Y'); // 31-07-2012

			$photo_date = $dia.' '.$mes.' '.$ano;
			$monthi = ($date->format('m'))-1;
			$mese = $date->format('m');
		?>
	 $( "#datepickerCongrats" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));	
<?php } else{
			$photo_date = '';
		}
?>


	});


function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
          	$('.belly_photo_back').css('background-image','url('+e.target.result+')');
          };
          reader.readAsDataURL(input.files[0]);
      }
  }

</script>

<style type="text/css">
#datepickerCongrats{
	padding-top: 305px;
	margin-left: 50px;
}

<?php if( isset($bellymonth['BellymonthPage']['photo']) ){ ?>
.belly_photo_back{
	background-image: url(../img/cover_photos/<?php echo str_replace(' ','%20',$bellymonth['BellymonthPage']['photo']); ?>);
}
<?php }?>


</style>



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


<?php echo $this->element('menu', array( "trimestre" => 2, "pag" => "bellymonth")); ?>

<a href="#" class="add_moment" id="my-moments">Moments</a>

    <div id="moments_popup">
        <div id="popup_moments"> <!--your content start-->
          <?php echo $this->element('moments'); ?>
          <a href="2" class="addnew-momento" id="mayiadd-moments" >Agrega una memoria</a>
        </div> <!--your content end-->
    </div> <!--toPopup end-->

<div id="dialog-box-momento" class="dialog-popup"></div>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 2)); ?>

<div class="page_title">
	<?php
			echo $this->Html->link(
				    'Anterior',
				    array('controller' => 'firstkick_pages', 'action' => 'add'),
				    array('class' => 'ant')
				);
	?>
	<div class="title_page">
		<p>Mi pancita</p>
		<span>mes a mes</span>
	</div>
	<?php 
		echo $this->Html->link(
				    'Siguiente',
				    array('controller' => 'gettingclose_pages', 'action' => 'add'),
				    array('class' => 'sig')
				);
	?>
</div>

  <div class="bellymonthPages form">
	<?php echo $this->Form->create('BellymonthPage', array('enctype' => 'multipart/form-data')); ?>
    <div class="colL">
      <div class="belly_photo_back"></div>

      <div class="belly_photo photo-v">
        <input type="hidden" name="data[BellymonthPage][url_photo]" id="photo_url_" value=""/>
        <div class="pick_fb">Elegir de Facebook</div>
        <?php
          echo $this->Form->file('photo', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
        ?>
      </div>
      <input type="text" id="datepickerCongrats" size="30" readonly="readonly"  value="<?php if($photo_date != ''){
            echo $photo_date; } ?>"/>
      <input type="hidden" name="data[BellymonthPage][photo_date][month]" id="CongratsPagePruebaMonth" <?php if($photo_date != ''){ ?>  value="<?php echo $mese; ?>" <?php } ?>  />
      <input type="hidden" name="data[BellymonthPage][photo_date][day]" id="CongratsPagePruebaDay" <?php if($photo_date != ''){ ?>  value="<?php echo $dia ?>" <?php } ?>  />
      <input type="hidden" name="data[BellymonthPage][photo_date][year]" id="CongratsPagePruebaYear" <?php if($photo_date != ''){ ?>  value="<?php echo $ano; ?>" <?php } ?>  />
    </div>
    <div class="colR">
      <p class="peso">
        <label>Mi peso actual: </label>
        <?php
          if(isset($bellymonth['BellymonthPage']['actual_weight'])){
            $actual_weight = $bellymonth['BellymonthPage']['actual_weight'];
          } else{
            $actual_weight = '';
          }
          ?>

          <input type="text" name="data[BellymonthPage][actual_weight]" value="<?php if($actual_weight != ''){ echo $actual_weight; } ?>"/>	
      </p>
      <p class="medida">
        <?php
          if(isset($bellymonth['BellymonthPage']['measurements'])){
            $measurements = $bellymonth['BellymonthPage']['measurements'];
          } else{
            $measurements = '';
          }
          ?>
        <label>Las medidas de mi pancita: </label>
        <input type="text" name="data[BellymonthPage][measurements]" value="<?php if($measurements != ''){ echo $measurements; } ?>"/>
      </p>
      <p>Totalmente justificables considerando como me duele la espalda.</p>
      <div class="hungry">
        <p>Huy, mi apetito es del tamaño de un:</p>
       <?php
          if(isset($bellymonth['BellymonthPage']['apetite'])){
            $apetite = $bellymonth['BellymonthPage']['apetite'];
          } else{
            $apetite = '';
          }
        ?>
        <p class="opcion">
          <input type="radio" name="data[BellymonthPage][apetite]" value="1" <?php if($apetite == 1){ echo 'checked="checked"'; } ?> />
          <label>Elefante</label>
        </p>
        <p class="opcion">
          <input type="radio" name="data[BellymonthPage][apetite]" value="2" <?php if($apetite == 2){ echo 'checked="checked"'; } ?> />
          <label>Le&oacute;n</label>
        </p>
        <p class="opcion">
          <input type="radio" name="data[BellymonthPage][apetite]" value="3" <?php if($apetite == 3){ echo 'checked="checked"'; } ?> />
          <label>Rat&oacute;n</label>
        </p>
      </div>
      <div class="miss">
        <p>Las cosas que más extraño de mi vida antes de estar embarazada son: </p>
       <?php
          if(isset($bellymonth['BellymonthPage']['b4'])){
            $b4 = $bellymonth['BellymonthPage']['b4'];
          } else{
            $b4 = '';
          }
        ?>
        <p class="opcion">
          <input type="radio" name="data[BellymonthPage][b4radio]" value="1" <?php if($b4 == 1){ echo 'checked="checked"'; } ?> />
          <label>¡Mmmmm! un buen vino y una rica cena</label>
        </p>
        <p class="opcion">
          <input type="radio" name="data[BellymonthPage][b4radio]" value="2" <?php if($b4 == 2){ echo 'checked="checked"'; } ?> />
          <label>Mi vejiga de su tamaño normal</label>
        </p>
        <p class="opcion">
          <input type="radio" name="data[BellymonthPage][b4radio]" value="3" <?php if($b4 == 3){ echo 'checked="checked"'; } ?> />
          <label>Mis tobillos</label>
        </p>
        <label>Otro</label>
        <input type="text" name="data[BellymonthPage][b4]" value="<?php if($b4 != "" && ($b4 != 3 && $b4 != 2 && $b4 != 1) ){ echo $b4; } ?>" />
      </div>
    </div>
    

    <p class="cerca">
      Ya estás cerca... Escribe lo que has sentido durante este trimestre... ¿Dónde va a nacer tu bebé? ¿Cuál ha sido la pregunta más loca que le has querido hacer a tu ginecólogo? ¿Qué se te diﬁculta hacer ahora? ¿Cómo te sientes de ánimo? ¿Cómo quieres decorar el cuarto de tu bebé? ¿Qué es lo que más te hace feliz en estos momentos? Atesora todo lo que desees recordar.
    </p>
    <?php
      echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
    ?>
  <?php echo $this->Form->end(__('Submit')); ?>
  </div>

</div>

