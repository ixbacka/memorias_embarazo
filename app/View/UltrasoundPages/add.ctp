<!-- add.ctp -->
<?php echo $this->Html->css('PhotoSelector'); ?>
<?php echo $this->Html->script('photo_selector'); ?>
<?php echo $this->Html->script('jquery-ui/js/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->css('redmond/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->script('functions'); ?>

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

<style type="text/css">

<?php if( isset($ultrasound['UltrasoundPage']['first_photo']) ){ ?>
#ultrasound_photo_1_back{
  background-image: url(../img/cover_photos/<?php echo str_replace(' ','%20',$ultrasound['UltrasoundPage']['first_photo']); ?>);
 
}
<?php }?>

<?php if( isset($ultrasound['UltrasoundPage']['second_photo']) ){ ?>
#ultrasound_photo_2_back{
  background-image: url(../img/cover_photos/<?php echo str_replace(' ','%20',$ultrasound['UltrasoundPage']['second_photo']); ?>);
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

      console.log(photo.source);
      console.log(idpapa);
      $('.'+idpapa).val(photo.source);
      $('#'+idpapa+'_back').css('background-image','url('+photo.source+')');
      //background-size: 280px 215px, 240px 192px;

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
    
    $(".pick_fb").click(function (e) {
        e.preventDefault();
        elpapa = $(this).parent().get(0).id;
        id = null;
        if ( $(this).attr('data-id') ) id = $(this).attr('data-id');
        fbphotoSelect(id, elpapa); 
    });
 
<?php if(isset($ultrasound['UltrasoundPage']['first_date'])){ 
  $source = $ultrasound['UltrasoundPage']['first_date'];
  $date = new DateTime($source);
  $letime = strtotime($source);

  $mes = get_date_spanish($letime, true, 'month'); # return Enero

  $dia = $date->format('d'); // 31.07.2012
  $ano = $date->format('Y'); // 31-07-2012
  //2013-05-16
  $first_date = $ano.'-'.$date->format('m').'-'.$dia;
  $monthi = ($date->format('m'))-1;
      $first_date_dia = $dia;
      $first_date_mes = $date->format('m');
      $first_date_ano = $ano;
?>

   $( "#datepickerCongrats" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));  

<?php } else{
      $first_date = '';
    }
?>


  $( "#datepickerCongrats1" ).datepicker( "option", $.datepicker.regional['es']);  
  $( "#datepickerCongrats1" ).datepicker({ 
    dateFormat: 'dd MM yy',
    onSelect: function(dateText) {
        //display("Selected date: " + dateText + "; input's current value: " + this.value);
        var n=dateText.split(" ");
        var mes = '0';
        console.log(n);
        
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
        console.log(mes);

        $('#CongratsPagePrueba1Month').val(mes);
        $('#CongratsPagePrueba1Day').val(n[0]);
        $('#CongratsPagePrueba1Year').val(n[2]);
      }
   });



<?php if(isset($ultrasound['UltrasoundPage']['second_date'])){ 

      $source = $ultrasound['UltrasoundPage']['second_date'];
      $date = new DateTime($source);
      $letime = strtotime($source);

      $mes1 = get_date_spanish($letime, true, 'month'); # return Enero

      $dia1 = $date->format('d'); // 31.07.2012
      $ano1 = $date->format('Y'); // 31-07-2012

      $second_date = $ano1.'-'.$date->format('m').'-'.$dia1;
      $second_date_dia = $dia1;
      $second_date_mes = $date->format('m');
      $second_date_ano = $ano1;

      $monthi1 = ($date->format('m'))-1;
    ?>

   $( "#datepickerCongrats1" ).datepicker("setDate", new Date(<?php echo $ano1.', '.$monthi1.', '.$dia1;?>));  

<?php } else{
      $second_date = '';
    }
?>

  });


function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          var elpapa = $(input).parent().get(0).id;

          reader.onload = function (e) {
            $('#'+elpapa+'_back').css('background-image','url('+e.target.result+')');          
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
<?php echo $this->element('menu', array( "trimestre" => 1, "pag" => "ultrasound")); ?>

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
            'Anterior',
            array('controller' => 'sintom_pages', 'action' => 'add'),
            array('class' => 'ant')
        );
  ?>
  <div class="title_page">
    <p>s&uacute;per cool</p>
    <span>fotos del ultrasonido</span>
  </div>
  <?php 
    echo $this->Html->link(
            'Siguiente',
            array('controller' => 'belly_pages', 'action' => 'add'),
            array('class' => 'sig')
        );
  ?>
</div>
  <div class="ultrasoundPages form">
  <?php echo $this->Form->create('UltrasoundPage', array('enctype' => 'multipart/form-data')); ?>
    <div class="ultra">
      <div id="ultrasound_photo_1_back"></div>
      <div class="photo-up" id="ultrasound_photo_1" >
        <input type="hidden" name="data[UltrasoundPage][url_photo]" class="ultrasound_photo_1" value=""/>
        <div class="pick_fb">Elegir de Facebook</div>
        <?php
          echo $this->Form->file('first_photo', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
        ?>
      </div>
      <div class="info">
        <h3>Primer Ultrasonido</h3>
        <p>
          <label>Fuí el: </label>
          <input type="text" id="datepickerCongrats" size="30" readonly="readonly"/>
     
            <input type="hidden" name="data[UltrasoundPage][first_date][month]" id="CongratsPagePruebaMonth" <?php if($first_date != ''){ ?>  value="<?php echo $first_date_mes; ?>" <?php } ?>/>
            <input type="hidden" name="data[UltrasoundPage][first_date][day]" id="CongratsPagePruebaDay" <?php if($first_date != ''){ ?>  value="<?php echo $first_date_dia; ?>" <?php } ?> />
            <input type="hidden" name="data[UltrasoundPage][first_date][year]" id="CongratsPagePruebaYear" <?php if($first_date != ''){ ?>  value="<?php echo $first_date_ano; ?>" <?php } ?> />
        </p>
        <p>
          <label for="CongratsPageBabycoming">Tenía </label>
          <input name="data[UltrasoundPage][first_week]" type="number" min="0" MAX="41" id="CongratsPageBabycoming" value="<?php if( isset($ultrasound['UltrasoundPage']['first_week'])){ echo $ultrasound['UltrasoundPage']['first_week']; }?>"> 
          semanas de embarazo
        </p>
        <p>
          <?php
            if(isset($ultrasound['UltrasoundPage']['first_notes'])){
              $first_notes = $ultrasound['UltrasoundPage']['first_notes'];
            } else{
              $first_notes = '';
            }
            echo $this->Form->input('first_notes', array('label' => 'La primera vez que te vi y o&iacute;, yo: ', 'div' => false, 'value' => $first_notes));
          ?>
        </p>
      </div>
    </div>

    <div class="ultra">
      <div id="ultrasound_photo_2_back"></div>
      <div class="photo-up" id="ultrasound_photo_2" >
        <input type="hidden" name="data[UltrasoundPage][url_photo_1]" class="ultrasound_photo_2" value=""/>
        <div class="pick_fb">Elegir de Facebook</div>
        <?php
          echo $this->Form->file('second_photo', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
        ?>  
      </div>
      <div class="info">
        <h3>Segundo Ultrasonido</h3>
        <p>
          <label>Fuí el: </label>
          <input type="text" id="datepickerCongrats1" size="30" readonly="readonly" <?php if($second_date != ''){ echo 'value="' . $second_date . '"'; } ?>/>
                   
          <input type="hidden" name="data[UltrasoundPage][second_date][month]" id="CongratsPagePrueba1Month" <?php if($second_date != ''){ ?>  value="<?php echo $second_date_mes; ?>" <?php } ?> />
          <input type="hidden" name="data[UltrasoundPage][second_date][day]" id="CongratsPagePrueba1Day" <?php if($second_date != ''){ ?>  value="<?php echo $second_date_dia; ?>" <?php } ?>/>
          <input type="hidden" name="data[UltrasoundPage][second_date][year]" id="CongratsPagePrueba1Year" <?php if($second_date != ''){ ?>  value="<?php echo $second_date_ano; ?>" <?php } ?>/>
        </p>
        <p>
          <label for="CongratsPageBabycoming">Tenía </label>
          <input name="data[UltrasoundPage][second_week]" type="number" min="0" max="41" value="<?php if( isset($ultrasound['UltrasoundPage']['second_week'])){ echo $ultrasound['UltrasoundPage']['second_week']; }?>">
          semanas de embarazo
        </p>
        <p><?php
          if(isset($ultrasound['UltrasoundPage']['second_notes'])){
            $second_notes = $ultrasound['UltrasoundPage']['second_notes'];
          } else{
            $second_notes = '';
          }
          echo $this->Form->input('second_notes', array('label' => 'Ahora: ','div' => false,'value' => $second_notes));
        ?> <p>
      </div>
    </div>
    <?php
      // Esto no lo borres., lo comente para poder verla en local
      echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
    ?>  
      <?php echo $this->Form->end(array(
                'label' => 'Submit',
                'div' => array(
                    'id' => 'button_ultra',
                )
            ));
      ?>
  </div>
</div>

</div>

