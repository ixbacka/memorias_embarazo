<?php echo $this->Html->script('jquery-ui/js/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->script('functions'); ?>
<?php echo $this->Html->css('redmond/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->css('PhotoSelector'); ?>
<?php echo $this->Html->script('photo_selector'); ?>

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
      $('.firstkick_photo_back').css('background-image','url('+photo.source+')');
    };


    // Initialise the Photo Selector with options that will apply to all instances
    CSPhotoSelector.init({debug: true});

    // Create Photo Selector instances
    selector = CSPhotoSelector.newInstance({
      callbackAlbumSelected  : callbackAlbumSelected,
      callbackAlbumUnselected  : callbackAlbumUnselected,
      callbackPhotoSelected  : callbackPhotoSelected,
      callbackPhotoUnselected  : callbackPhotoUnselected,
      callbackSubmit      : callbackSubmit,
      maxSelection      : 1,
      albumsPerPage      : 6,
      photosPerPage      : 200,
      autoDeselection      : true
    });

    // reset and show album selector
    selector.reset();
    selector.showAlbumSelector(id);
  }

  $(document).ready(function(){


    //$( "#datepickerCongrats1" ).datepicker({});
    //$( "#datepickerCongrats1" ).datepicker( "option", $.datepicker.regional['es']);

    
    $(".pick_fb").click(function (e) {
        e.preventDefault();
        elpapa = $(this).parent().get(0).id;
        id = null;
        if ( $(this).attr('data-id') ) id = $(this).attr('data-id');
        fbphotoSelect(id, elpapa); 
    });



  $( "#datepickerCongrats1" ).datepicker({
      dateFormat: 'd MM yy',
      onSelect: function(dateText) {
        //display("Selected date: " + dateText + "; input's current value: " + this.value);
        var n=dateText.split(" ");
        var mes = '0';
        
        if(n[1] == 'Enero'){
          mes = '01';
        } else if (n[1] == 'Febrero'){
          mes = '02';
        } else if (n[1] == 'Marzo'){
          mes = '03';
        } else if (n[1] == 'Abril'){
          mes = '04';
        } else if (n[1] == 'Mayo'){
          mes = '05';
        } else if (n[1] == 'Junio'){
          mes = '06';
        } else if (n[1] == 'Julio'){
          mes = '07';
        } else if (n[1] == 'Agosto'){
          mes = '08';
        } else if (n[1] == 'Septiembre'){
          mes = '09';
        } else if (n[1] == 'Octubre'){
          mes = '10';
        } else if (n[1] == 'Noviembre'){
          mes = '11';
        } else if (n[1] == 'Diciembre'){
          mes = '12';
        }

        $('#CongratsPagePruebaMonth1').val(mes);
        $('#CongratsPagePruebaDay1').val(n[0]);
        $('#CongratsPagePruebaYear1').val(n[2]);
      }
  });

<?php if(isset($firstkick['FirstkickPage']['firstkick_date'])){ 

      $source = $firstkick['FirstkickPage']['firstkick_date'];
      $date = new DateTime($source);
      $letime = strtotime($source);

      $mes = get_date_spanish($letime, true, 'month'); # return Enero

      $dia = $date->format('d'); // 31.07.2012
      $ano = $date->format('Y'); // 31-07-2012

      $firstkick_date = $dia.' '.$mes.' '.$ano;
      $monthi = ($date->format('m'))-1;
      $month_prueba = $date->format('m');
    ?>
   $( "#datepickerCongrats" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));  
<?php } else{
      $firstkick_date = '';
    }
?>


<?php if(isset($firstkick['FirstkickPage']['photo_date'])){ 

      $source = $firstkick['FirstkickPage']['photo_date'];
      $date = new DateTime($source);
      $letime = strtotime($source);

      $mes = get_date_spanish($letime, true, 'month'); # return Enero

      $dia1 = $date->format('d'); // 31.07.2012
      $ano1 = $date->format('Y'); // 31-07-2012

      $photo_date = $dia.' '.$mes.' '.$ano;
      $monthi = ($date->format('m'))-1;
      $month_prueba1 = $date->format('m');
    ?>
   $( "#datepickerCongrats1" ).datepicker("setDate", new Date(<?php echo $ano1.', '.$monthi.', '.$dia1;?>));  

<?php } else{
      $photo_date = '';
    }
?>



  });


function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('.firstkick_photo_back').css('background-image','url('+e.target.result+')');
          };
          reader.readAsDataURL(input.files[0]);
      }
  }
/*
  $(window).load(function() {

    console.log('LOAD :S WHAT FARTOOO');

    $( "#datepickerCongrats1" ).datepicker( "option", "dateFormat", 'd MM yy' );
    $( "#datepickerCongrats1" ).datepicker( "option", $.datepicker.regional['es']);


  });
*/
</script>

<style type="text/css">

<?php if( isset($firstkick['FirstkickPage']['photo']) ){ ?>

.firstkick_photo_back{
  background-image: url(../img/cover_photos/<?php echo str_replace(' ','%20',$firstkick['FirstkickPage']['photo']); ?>);
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


<?php echo $this->element('menu', array( "trimestre" => 2, "pag" => "firstkick")); ?>

<a href="#" class="add_moment" id="my-moments">Moments</a>

    <div id="moments_popup">
        <div id="popup_moments"> <!--your content start-->
          <?php echo $this->element('moments'); ?>
          <a href="2" class="addnew-momento" id="mayiadd-moments" >Agrega un momento</a>
        </div> <!--your content end-->
    </div> <!--toPopup end-->

<div id="dialog-box-momento" class="dialog-popup"></div>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 2)); ?>

<div class="page_title">
  <?php
      echo $this->Html->link(
            'Anterior',
            array('controller' => 'childsex_pages', 'action' => 'add'),
            array('class' => 'ant')
        );
  ?>
  <div class="title_page">
    <p>¡LAS PRIMERAS!</p>
    <span>pataditas...</span>
  </div>
  <?php 
    echo $this->Html->link(
            'Siguiente',
            array('controller' => 'bellymonth_pages', 'action' => 'add'),
            array('class' => 'sig')
        );
  ?>
</div>

  <div class="firstkickPages form">

    <?php echo $this->Form->create('FirstkickPage', array('enctype' => 'multipart/form-data')); ?>
    <p>Hay una sensación muy dificil de describir, y es cuando sentí a mi bebé revoloteando en mi pancita, pero lo intentaré:</p>
    <p>
      <label>Esta maravilla de la vida la sentí el </label>
      <input type="text" id="datepickerCongrats" size="30" readonly="readonly"  value="<?php if($firstkick_date != ''){ echo $firstkick_date; } ?>"/>
    </p>
    <input type="hidden" name="data[FirstkickPage][firstkick_date][month]" id="CongratsPagePruebaMonth" <?php if($firstkick_date != ''){ ?>  value="<?php echo $month_prueba; ?>" <?php } ?> />
    <input type="hidden" name="data[FirstkickPage][firstkick_date][day]" id="CongratsPagePruebaDay" <?php if($firstkick_date != ''){ ?>  value="<?php echo $dia; ?>" <?php } ?> />
    <input type="hidden" name="data[FirstkickPage][firstkick_date][year]" id="CongratsPagePruebaYear" <?php if($firstkick_date != ''){ ?>  value="<?php echo $ano; ?>" <?php } ?> />
    <?php
      if(isset($firstkick['FirstkickPage']['week'])){
        $week = $firstkick['FirstkickPage']['week'];
      } else{
        $week = '';
      }
    ?>
  </p>
  <p class="startkick">
    <label>Aay, la semana en que empezó a patear duro el bebé fue :</label>
    <input type="text" name="data[FirstkickPage][week]" value="<?php if($week != ''){ echo $week; } ?>"/>
  </p>
  <div class="colL">
    <div class="firstkick_photo_back"></div>
    <div class="firstkick_photo photo-v">
      <input type="hidden" name="data[FirstkickPage][url_photo]" id="photo_url_" value=""/>
      <div class="pick_fb">Elegir de Facebook</div>
      <?php
        echo $this->Form->file('photo', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
      ?>
    </div>
    <input type="text" id="datepickerCongrats1" size="30" readonly="readonly"  value="<?php if($photo_date != ''){
          echo $photo_date; } ?>"/>
    <input type="hidden" name="data[FirstkickPage][photo_date][month]" id="CongratsPagePruebaMonth1" <?php if($photo_date != ''){ ?>  value="<?php echo $month_prueba1; ?>" <?php } ?>   />
    <input type="hidden" name="data[FirstkickPage][photo_date][day]" id="CongratsPagePruebaDay1" <?php if($photo_date != ''){ ?>  value="<?php echo $dia1; ?>" <?php } ?>  />
    <input type="hidden" name="data[FirstkickPage][photo_date][year]" id="CongratsPagePruebaYear1" <?php if($photo_date != ''){ ?>  value="<?php echo $ano1; ?>" <?php } ?>  />
  </div>
  <div class="colR">
    <p class="photogenic">
      <label>Ahora qué eres más fotogénico, claramente pude ver:</label>
      <?php
        if(isset($firstkick['FirstkickPage']['photogenic'])){
          $photogenic = $firstkick['FirstkickPage']['photogenic'];
        } else{
          $photogenic = '';
        }
      ?>
      <input type="text" name="data[FirstkickPage][photogenic]" value="<?php if($photogenic != ''){ echo $photogenic; } ?>"/>
    </p>
    <p class="gran"><label>La GRAN pregunta: ¿el bebé es? </label></p>
    <?php
      if(isset($firstkick['FirstkickPage']['bigquestion'])){
        $bigquestion = $firstkick['FirstkickPage']['bigquestion'];
      } else{
        $bigquestion = '';
      }
    ?>
    <div class="opciones cf">
      <div class="opcion nino">
        <input type="radio" name="data[FirstkickPage][bigquestion]" value="1" <?php if($bigquestion == 1){
        echo 'checked="checked"'; } ?> />
        <label>Niño</label>
      </div>
      <div class="opcion nina">
        <input type="radio" name="data[FirstkickPage][bigquestion]" value="2" <?php if($bigquestion == 2){
        echo 'checked="checked"'; } ?> />
        <label>Niña</label>
      </div>
      <div class="opcion nose">
        <input type="radio" name="data[FirstkickPage][bigquestion]" value="3" <?php if($bigquestion == 3){
        echo 'checked="checked"'; } ?> />
        <label>Todavía no se ve nada!</label>
      </div>
    </div>
    <?php
      if(isset($firstkick['FirstkickPage']['craving1'])){
        $craving1 = $firstkick['FirstkickPage']['craving1'];
      } else{
        $craving1 = '';
      }
      if(isset($firstkick['FirstkickPage']['craving2'])){
        $craving2 = $firstkick['FirstkickPage']['craving2'];
      } else{
        $craving2 = '';
      }
      if(isset($firstkick['FirstkickPage']['craving3'])){
        $craving3 = $firstkick['FirstkickPage']['craving3'];
      } else{
        $craving3 = '';
      }
      if(isset($firstkick['FirstkickPage']['craving4'])){
        $craving4 = $firstkick['FirstkickPage']['craving4'];
      } else{
        $craving4 = '';
      }
    ?>
    <div class="antojos">
      <label>Antojos</label>
      <input type="text" name="data[FirstkickPage][craving1]" value="<?php if($craving1 != ''){ echo $craving1; } ?>"/>
      <input type="text" name="data[FirstkickPage][craving2]" value="<?php if($craving2 != ''){ echo $craving2; } ?>"/>
      <input type="text" name="data[FirstkickPage][craving3]" value="<?php if($craving3 != ''){ echo $craving3; } ?>"/>
      <input type="text" name="data[FirstkickPage][craving4]" value="<?php if($craving4 != ''){ echo $craving4; } ?>"/>
    </div>
    <?php
      if(isset($firstkick['FirstkickPage']['gross1'])){
        $gross1 = $firstkick['FirstkickPage']['gross1'];
      } else{
        $gross1 = '';
      }
      if(isset($firstkick['FirstkickPage']['gross2'])){
        $gross2 = $firstkick['FirstkickPage']['gross2'];
      } else{
        $gross2 = '';
      }
      if(isset($firstkick['FirstkickPage']['gross3'])){
        $gross3 = $firstkick['FirstkickPage']['gross3'];
      } else{
        $gross3 = '';
      }
      if(isset($firstkick['FirstkickPage']['gross4'])){
        $gross4 = $firstkick['FirstkickPage']['gross4'];
      } else{
        $gross4 = '';
      }
    ?>
    <div class="antojos">
      <label>Ascos</label>
      <input type="text" name="data[FirstkickPage][gross1]" value="<?php if($gross1 != ''){ echo $gross1; } ?>"/>
      <input type="text" name="data[FirstkickPage][gross2]" value="<?php if($gross2 != ''){ echo $gross2; } ?>"/>
      <input type="text" name="data[FirstkickPage][gross3]" value="<?php if($gross3 != ''){ echo $gross3; } ?>"/>
      <input type="text" name="data[FirstkickPage][gross4]" value="<?php if($gross4 != ''){ echo $gross4; } ?>"/>
    </div>
  </div>
	<?php
		echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
	?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
