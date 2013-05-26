<!-- add.ctp -->
<?php //echo $this->Html->script('functions'); ?>
<?php echo $this->Html->css('PhotoSelector'); ?>
<?php echo $this->Html->script('photo_selector'); ?>
<?php echo $this->Html->script('functions'); ?>
<?php echo $this->Html->script('jquery-ui/js/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->css('redmond/jquery-ui-1.10.3.custom.min'); ?>

<style type="text/css">

.title_page span {
top: 42px;
position: absolute;
left: 319px;
}

.title_page p{
  margin-left: -2px;
}

.footer{
  top: 970px;
}

body{
  width: 810px;
  height: 1170px;
}

<?php if( isset($ultrasound['UltrasoundPage']['first_photo']) ){ ?>
#ultrasound_photo_1{
  background-image: url(../img/marco_whoami.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$ultrasound['UltrasoundPage']['first_photo']); ?>);
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


<?php if( isset($ultrasound['UltrasoundPage']['second_photo']) ){ ?>
#ultrasound_photo_2{
  background-image: url(../img/marco_whoami.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$ultrasound['UltrasoundPage']['second_photo']); ?>);
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

<?php if(isset($ultrasound['UltrasoundPage']['first_date'])){ 
  $source = $ultrasound['UltrasoundPage']['first_date'];
  $date = new DateTime($source);
  $letime = strtotime($source);

  $mes = get_date_spanish($letime, true, 'month'); # return Enero

  $dia = $date->format('d'); // 31.07.2012
  $ano = $date->format('Y'); // 31-07-2012

  $first_date = $dia.' '.$mes.' '.$ano;
  $monthi = ($date->format('m'))-1;
?>
<script type="text/javascript">
$(document).ready(function(){

   $( "#datepickerCongrats" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));  
});

</script>
<?php } else{
      $first_date = '';
    }
?>


<?php if(isset($ultrasound['UltrasoundPage']['second_date'])){ 

      $source = $ultrasound['UltrasoundPage']['second_date'];
      $date = new DateTime($source);
      $letime = strtotime($source);

      $mes = get_date_spanish($letime, true, 'month'); # return Enero

      $dia = $date->format('d'); // 31.07.2012
      $ano = $date->format('Y'); // 31-07-2012

      $second_date = $dia.' '.$mes.' '.$ano;
      $monthi = ($date->format('m'))-1;
    ?>
<script type="text/javascript">
$(document).ready(function(){

   $( "#datepickerCongrats1" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));  
});

</script>
<?php } else{
      $second_date = '';
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

      console.log(photo.source);

      $('#'+idpapa).val(photo.source);
      $('.'+idpapa).css('background-image','url(../img/marco_circular.png), url('+photo.source+')');

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

     $( "#datepickerCongrats1" ).datepicker({
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

        $('#CongratsPagePrueba1Month').val(mes);
        $('#CongratsPagePrueba1Day').val(n[0]);
        $('#CongratsPagePrueba1Year').val(n[2]);
      }
  });

  $( "#datepickerCongrats1" ).datepicker( "option", "dateFormat", 'd MM yy' );
  $( "#datepickerCongrats1" ).datepicker( "option", $.datepicker.regional['es']);


  });


function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          var elpapa = $(input).parent().get(0).id;

          reader.onload = function (e) {
            $('.'+elpapa).css('background-image','url(../img/marco_circular.png), url('+e.target.result+')');
            
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
<?php echo $this->element('trim_menu', array( "trimestre" => 1)); ?>
<ul class="vertical_menu_1">
  <li class="selected">
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
            'Anterior',
            array('controller' => 'sintom_pages', 'action' => 'add'),
            array('class' => 'ant')
        );
  ?>
  <div class="title_page"><p>primeros</p>
    <span>síntomas y malestares</span>
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

    <div class="ultrasound_photo_1">
      <input type="hidden" name="data[UltrasoundPage][url_photo]" id="ultrasound_photo_1" value=""/>
      <div class="pick_fb">Elegir de Facebook</div>
      <?php
        echo $this->Form->file('first_photo', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
      ?>
    </div>

    <h3>Primer Ultrasonido</h3>

        <label>Fuí el: </label>
        <input type="text" id="datepickerCongrats" size="30" readonly="readonly"  value="<?php if($first_date != ''){
          echo $first_date; } ?>"/>

        <input type="hidden" name="data[UltrasoundPage][first_date][month]" id="CongratsPagePruebaMonth" />
        <input type="hidden" name="data[UltrasoundPage][first_date][day]" id="CongratsPagePruebaDay" />
        <input type="hidden" name="data[UltrasoundPage][first_date][year]" id="CongratsPagePruebaYear" />

    <label for="CongratsPageBabycoming">Tenía </label>
    <input name="data[UltrasoundPage][first_week]" type="number" id="CongratsPageBabycoming" value="<?php if( isset($ultrasound['UltrasoundPage']['first_week'])){ echo $ultrasound['UltrasoundPage']['first_week']; }?>"> 
    <p>semanas de embarazo </p>

    <?php
    if(isset($ultrasound['UltrasoundPage']['first_notes'])){
      $first_notes = $ultrasound['UltrasoundPage']['first_notes'];
    } else{
      $first_notes = '';
    }
      echo $this->Form->input('first_notes', array('label' => 'Pero cuando me siento peor es: ', 'div' => false, 'value' => $first_notes));
    ?>  
    
    <div class="ultrasound_photo_2">
      <input type="hidden" name="data[UltrasoundPage][url_photo_1]" id="ultrasound_photo_2" value=""/>
      <div class="pick_fb">Elegir de Facebook</div>
      <?php
        echo $this->Form->file('second_photo', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
      ?>
    </div>

    <h3>Segundo Ultrasonido</h3>
        <label>Fuí el: </label>
        <span><input type="text" id="datepickerCongrats" size="30" readonly="readonly"  value="<?php if($prueba != ''){
          echo $prueba; } ?>"/></span>
        <input type="hidden" name="data[UltrasoundPage][second_date][month]" id="CongratsPagePruebaMonth" />
        <input type="hidden" name="data[UltrasoundPage][second_date][day]" id="CongratsPagePruebaDay" />
        <input type="hidden" name="data[UltrasoundPage][second_date][year]" id="CongratsPagePruebaYear" />
    
    <label for="CongratsPageBabycoming">Tenía </label>
    <input name="data[UltrasoundPage][second_week]" type="number" value="<?php if( isset($ultrasound['UltrasoundPage']['second_week'])){ echo $ultrasound['UltrasoundPage']['second_week']; }?>">
    <p>semanas de embarazo</p>

    <?php
    if(isset($ultrasound['UltrasoundPage']['second_notes'])){
      $second_notes = $ultrasound['UltrasoundPage']['second_notes'];
    } else{
      $second_notes = '';
    }
    
    echo $this->Form->input('second_notes', array('label' => 'Pero cuando me siento peor es: ','div' => false,'value' => $second_notes));
    ?>  
    
  </div>
  <?php
    // Esto no lo borres., lo comente para poder verla en local
    //echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
  ?>  
    <?php echo $this->Form->end(array(
              'label' => 'Submit',
              'div' => array(
                  'id' => 'button_sintom',
              )
          ));
    ?>
</div>

</div>
  <div class="footer">
    <div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
    <a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
    <a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
  </div>
