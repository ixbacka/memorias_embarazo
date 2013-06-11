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
      $('#'+idpapa).css('background-image','url(../img/marco.png), url('+photo.source+')');

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


<?php if(isset($cool['CoolultrasoundPage']['ultrasound_date'])){ 

      $source = $cool['CoolultrasoundPage']['ultrasound_date'];
      $date = new DateTime($source);
      $letime = strtotime($source);

      $mes = get_date_spanish($letime, true, 'month'); # return Enero

      $dia = $date->format('d'); // 31.07.2012
      $ano = $date->format('Y'); // 31-07-2012

      $ultrasound_date = $dia.' '.$mes.' '.$ano;
      $monthi = ($date->format('m'))-1;
    ?>
   $( "#datepickerCongrats" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));  
<?php } else{
      $ultrasound_date = '';
    }
?>

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

<style type="text/css">

<?php if( isset($cool['CoolultrasoundPage']['photo']) ){ ?>
#photo{
  background-image: url(../img/marco.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$cool['CoolultrasoundPage']['photo']); ?>);
  background-size: 297px 392px, 225px 320px;
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


<?php echo $this->element('menu', array( "trimestre" => 3, "pag" => "coolultrasound")); ?>
<?php
    echo $this->Html->link(
            'Add Moment',
            array('controller' => 'moment_pages', 'action' => 'add'),
            array('class' => 'add_moment')
        );
  ?>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 3)); ?>

<div class="page_title">
  <?php
      echo $this->Html->link(
            'Anterior',
            array('controller' => 'babyshower_pages', 'action' => 'add'),
            array('class' => 'ant')
        );
  ?>
  <div class="title_page">
    <p>S&uacute;per cool</p>
    <span>fotos del ultrasonido</span>
  </div>
  <?php 
    echo $this->Html->link(
            'Siguiente',
            array('controller' => 'nesting_pages', 'action' => 'add'),
            array('class' => 'sig')
        );
  ?>
</div>

  
  <div class="coolultrasoundPages form">
    <?php echo $this->Form->create('CoolultrasoundPage', array('enctype' => 'multipart/form-data')); ?>
    <div id="photo" class="photo-up">
      <input type="hidden" name="data[CoolultrasoundPage][url_photo]" class="photo" value=""/>
      <div class="pick_fb">Elegir de Facebook</div>
      <?php
        echo $this->Form->file('photo', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
      ?>
    </div>
    <div class="bloque uno">
      <h3>Ultrasonido</h3>
      <p class="fui">
        <label>Fu&iacute; el :</label>
        <input type="text" id="datepickerCongrats" size="30" readonly="readonly"  value="<?php if($ultrasound_date != ''){
              echo $ultrasound_date; } ?>"/>
        <input type="hidden" name="data[CoolultrasoundPage][ultrasound_date][month]" id="CongratsPagePruebaMonth" />
        <input type="hidden" name="data[CoolultrasoundPage][ultrasound_date][day]" id="CongratsPagePruebaDay" />
        <input type="hidden" name="data[CoolultrasoundPage][ultrasound_date][year]" id="CongratsPagePruebaYear" />
      </p>
      <p class="semanas">
        <label>Ten&iacute;a </label>
        <?php if(isset($cool['CoolultrasoundPage']['iwas'])){
          $iwas = $cool['CoolultrasoundPage']['iwas'];
        } else{
          $iwas = '';
        } ?>
        <input type="number" name="data[CoolultrasoundPage][iwas]" value="<?php if($iwas != ''){ echo $iwas; } ?>" >
        semanas de embarazo
      </p>
      <p class="doctor">
        <label>Lo que me dijo el doctor fue: </label>
        <?php
        if(isset($cool['CoolultrasoundPage']['doctorsaid'])){
          $doctorsaid = $cool['CoolultrasoundPage']['doctorsaid'];
        } else{
          $doctorsaid = '';
        } ?>
        <input type="text" name="data[CoolultrasoundPage][doctorsaid]" value="<?php if($doctorsaid != ''){ echo $doctorsaid; } ?>" >
      </p>
    </div>

    <div class="bloque dos">
      <p>En este trimestre tu pap&aacute; est&aacute; un poco: </p>
      <?php  if(isset($cool['CoolultrasoundPage']['urdad'])){
        $urdad = $bellymonth['CoolultrasoundPage']['urdad'];
      } else{
        $urdad = '';
      }
      if(isset($cool['CoolultrasoundPage']['urdadsays'])){
        $urdadsays = $bellymonth['CoolultrasoundPage']['urdadsays'];
      } else{
        $urdadsays = '';
      } ?>
      <div class="opciones">
        <div class="opcion cf">
          <input type="radio" name="data[CoolultrasoundPage][urdad]" value="1" <?php if($urdad == 1){ echo 'checked="checked"'; } ?> />
          <label>Agobiado</label>
        </div>
        <div class="opcion cf">
          <input type="radio" name="data[CoolultrasoundPage][urdad]" value="2" <?php if($urdad == 2){ echo 'checked="checked"'; } ?> />
          <label>Sobreprotector</label>
        </div>
        <div class="opcion cf">
          <input type="radio" name="data[CoolultrasoundPage][urdad]" value="3" <?php if($urdad == 3){ echo 'checked="checked"'; } ?> />
          <label>Excluido</label>
        </div>
        <div class="opcion cf">
          <input type="radio" name="data[CoolultrasoundPage][urdad]" value="4" <?php if($urdad == 4){ echo 'checked="checked"'; } ?> />
          <label>Todas las anteriores</label>
        </div>
      </div>
      <input type="text" name="data[CoolultrasoundPage][urdadsays]" value="<?php if($urdadsays != ""){ echo $urdadsays; } ?>" />
    </div>
    <div class="bloque tres">
      <p>Las cosas que m&aacute;s extraño: </p>
      <?php
        if(isset($cool['CoolultrasoundPage']['imiss'])){
          $imiss = $bellymonth['CoolultrasoundPage']['imiss'];
        } else{
          $imiss = '';
        }
      ?>
      <div class="opciones">
        <div class="opcion cf">
          <input type="radio" name="data[CoolultrasoundPage][imiss]" value="1" <?php if($imiss == 1){
          echo 'checked="checked"'; } ?> />
          <label>Usar tacones</label>
        </div>
        <div class="opcion cf">
           <input type="radio" name="data[CoolultrasoundPage][imiss]" value="2" <?php if($imiss == 2){
          echo 'checked="checked"'; } ?> />
          <label>Ropa interior normal</label>
        </div>
        <div class="opcion cf">
           <input type="radio" name="data[CoolultrasoundPage][imiss]" value="3" <?php if($imiss == 3){
          echo 'checked="checked"'; } ?> />
          <label>Verme los pies</label>
        </div>
      </div>
      <p class="otro">
        <label>Otro </label>
        <input type="text" name="data[CoolultrasoundPage][imiss]" value="<?php if($imiss != ""){ echo $imiss; } ?>" />
      </p>
      <p class="panza">La gente que opina de mi panza: </p>
      <?php if(isset($cool['CoolultrasoundPage']['theythink'])){
          $theythink = $bellymonth['CoolultrasoundPage']['theythink'];
        } else{
          $theythink = '';
      } ?>
      <div class="opciones">
        <div class="opcion cf">
          <input type="radio" name="data[CoolultrasoundPage][theythink]" value="1" <?php if($theythink == 1){
          echo 'checked="checked"'; } ?> />
          <label>Es muy discreta para el mes en el que estoy</label>
        </div>
        <div class="opcion cf">
          <input type="radio" name="data[CoolultrasoundPage][theythink]" value="2" <?php if($theythink == 2){
          echo 'checked="checked"'; } ?> />
          <label>Corresponde a los meses que tengo de embarazo</label>
        </div>
        <div class="opcion cf">  <input type="radio" name="data[CoolultrasoundPage][theythink]" value="3" <?php if($theythink == 3){
          echo 'checked="checked"'; } ?> />
          <label>Esta a punto de estallar</label>
        </div>
        <div class="opcion cf">
          <input type="radio" name="data[CoolultrasoundPage][theythink]" value="4" <?php if($theythink == 4){
          echo 'checked="checked"'; } ?> />
          <label>¡Gigante! Parece de triates</label>
        </div>
      </div>
    </div>
    <?php
      echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
    ?>
  <?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
