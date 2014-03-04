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

      //logActivity('<br><strong>Submitted</strong><br> Photo ID: ' + photo.id + '<br>Photo URL: ' + photo.source + '<br>');
      // guardar img como portada , agregar a hidden field , y que lo mande .. inmediately ? 
      console.log(photo.source);
      console.log(' ehmem == > '+idpapa);
      $('.'+idpapa).val(photo.source);
      $('#'+idpapa+"_back_").css('background-image','url('+photo.source+')');

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


<?php if(isset($bbyshower['BabyshowerPage']['bbyshower_date'])){ 

      $source = $bbyshower['BabyshowerPage']['bbyshower_date'];
      $date = new DateTime($source);
      $letime = strtotime($source);

      $mes = get_date_spanish($letime, true, 'month'); # return Enero

      $dia = $date->format('d'); // 31.07.2012
      $ano = $date->format('Y'); // 31-07-2012

      $bbyshower_date = $dia.' '.$mes.' '.$ano;
      $monthi = ($date->format('m'))-1;
      $mese = $date->format('m');
    ?>
   $( "#datepickerCongrats" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));  
<?php } else{
      $bbyshower_date = '';
    }
?>

  });


function readURL(input) {
      if (input.files && input.files[0]) {
          var elpapa = $(input).parent().get(0).id;
          var reader = new FileReader();
          reader.onload = function (e) {
                  $('#'+elpapa+"_back_").css('background-image','url('+e.target.result+')');
          };
          reader.readAsDataURL(input.files[0]);
      }
  }

</script>

<style type="text/css">

<?php if( isset($bbyshower['BabyshowerPage']['photo1']) ){ ?>
#photo1_back_{
  background-image: url(../img/cover_photos/<?php echo str_replace(' ','%20',$bbyshower['BabyshowerPage']['photo1']); ?>);
}
<?php }?>

<?php if( isset($bbyshower['BabyshowerPage']['photo2']) ){ ?>
#photo2_back_{
  background-image:url(../img/cover_photos/<?php echo str_replace(' ','%20',$bbyshower['BabyshowerPage']['photo2']); ?>);
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


<?php echo $this->element('menu', array( "trimestre" => 3, "pag" => "babyshower")); ?>


<a href="#" class="add_moment" id="my-moments">Moments</a>

    <div id="moments_popup">
        <div id="popup_moments"> <!--your content start-->
          <?php echo $this->element('moments', array( "profyid" => $profileid)); ?>
          <a href="3" class="addnew-momento" id="mayiadd-moments" >Agrega una memoria</a>
        </div> <!--your content end-->
    </div> <!--toPopup end-->

<div id="dialog-box-momento" class="dialog-popup"></div>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 3)); ?>

<div class="page_title">
  <?php
      echo $this->Html->link(
            'Anterior',
            array('controller' => 'gettingclose_pages', 'action' => 'add'),
            array('class' => 'ant')
        );
  ?>
  <div class="title_page">
    <p>Baby shower</p>
  </div>
  <?php 
    echo $this->Html->link(
            'Siguiente',
            array('controller' => 'coolultrasound_pages', 'action' => 'add'),
            array('class' => 'sig')
        );
  ?>
</div>

  
  <div class="babyshowerPages form">
  <?php echo $this->Form->create('BabyshowerPage', array('enctype' => 'multipart/form-data')); ?>
  <p class="mibaby">
    <label>Mi baby shower fu&eacute;: </label>
    <input type="text" id="datepickerCongrats" size="30" readonly="readonly"  value="<?php if($bbyshower_date != ''){
          echo $bbyshower_date; } ?>"/>
    <input type="hidden" name="data[BabyshowerPage][bbyshower_date][month]" id="CongratsPagePruebaMonth" <?php if($bbyshower_date != ''){ ?>  value="<?php echo $mese; ?>" <?php } ?> />
    <input type="hidden" name="data[BabyshowerPage][bbyshower_date][day]" id="CongratsPagePruebaDay" <?php if($bbyshower_date != ''){ ?>  value="<?php echo $dia; ?>" <?php } ?> />
    <input type="hidden" name="data[BabyshowerPage][bbyshower_date][year]" id="CongratsPagePruebaYear" <?php if($bbyshower_date != ''){ ?>  value="<?php echo $ano; ?>" <?php } ?> />
  </p>

  <?php
    if(isset($bbyshower['BabyshowerPage']['present1'])){
      $present1 = $bbyshower['BabyshowerPage']['present1'];
    } else{
      $present1 = '';
    }
    if(isset($bbyshower['BabyshowerPage']['present2'])){
      $present2 = $bbyshower['BabyshowerPage']['present2'];
    } else{
      $present2 = '';
    }
    if(isset($bbyshower['BabyshowerPage']['present3'])){
      $present3 = $bbyshower['BabyshowerPage']['present3'];
    } else{
      $present3 = '';
    }
  ?>
  <div class="col uno">
    <label>Los regalos que recib&iacute;: </label>
    <input type="text" name="data[BabyshowerPage][present1]" value="<?php if($present1 != ''){ echo $present1; } ?>"/>
    <input type="text" name="data[BabyshowerPage][present2]" value="<?php if($present2 != ''){ echo $present2; } ?>"/>
    <input type="text" name="data[BabyshowerPage][present3]" value="<?php if($present3 != ''){ echo $present3; } ?>"/>
  </div>
  <div class="col dos">
    <p>El m&aacute;s divertido fue:</p>
    <?php
      if(isset($bbyshower['BabyshowerPage']['favoritepresent'])){
        $favoritepresent = $bbyshower['BabyshowerPage']['favoritepresent'];
      } else{
        $favoritepresent = '';
      }
    ?>
    <input type="radio" name="data[BabyshowerPage][favoritepresent]" value="1" <?php if($favoritepresent == 1){ echo 'checked="checked"'; } ?> />
     <input type="radio" name="data[BabyshowerPage][favoritepresent]" value="2" <?php if($favoritepresent == 2){ echo 'checked="checked"'; } ?> />
     <input type="radio" name="data[BabyshowerPage][favoritepresent]" value="3" <?php if($favoritepresent == 3){ echo 'checked="checked"'; } ?> />
  </div>

  <?php
    if(isset($bbyshower['BabyshowerPage']['guest1'])){
      $guest1 = $bbyshower['BabyshowerPage']['guest1'];
    } else{
      $guest1 = '';
    }
    if(isset($bbyshower['BabyshowerPage']['guest2'])){
      $guest2 = $bbyshower['BabyshowerPage']['guest2'];
    } else{
      $guest2 = '';
    }
    if(isset($bbyshower['BabyshowerPage']['guest3'])){
      $guest3 = $bbyshower['BabyshowerPage']['guest3'];
    } else{
      $guest3 = '';
    }
  ?>
  <div class="col tres">
    <label>Vinieron a conocerte dentro de mi panza: </label>
    <input type="text" name="data[BabyshowerPage][guest1]" value="<?php if($guest1 != ''){ echo $guest1; } ?>"/>
    <input type="text" name="data[BabyshowerPage][guest2]" value="<?php if($guest2 != ''){ echo $guest2; } ?>"/>
    <input type="text" name="data[BabyshowerPage][guest3]" value="<?php if($guest3 != ''){ echo $guest3; } ?>"/>
  </div>


  <div id="photo1_back_"></div>
  <div id="photo1" class="photo-up uno">
    <input type="hidden" name="data[BabyshowerPage][url_photo_1]" class="photo1" value=""/>
    <div class="pick_fb">Elegir de Facebook</div>
    <?php
      echo $this->Form->file('photo1', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
    ?>
  </div>
  <div id="photo2_back_"></div>
  <div id="photo2" class="photo-up dos">
    <input type="hidden" name="data[BabyshowerPage][url_photo_2]" class="photo2" value=""/>
    <div class="pick_fb">Elegir de Facebook</div>
    <?php
      echo $this->Form->file('photo2', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
    ?>
  </div>
  <?php
    echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
  ?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
