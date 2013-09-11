<?php $momentos = $this->requestAction('moment_pages/index'); ?>
<?php if(isset($momentos) && !empty($momentos)) {  ?>

<?php if($trimestre == 1){ ?>
  <?php if( findit(1, $momentos) ){ ?>
  <?php foreach ($momentos as $moment){ ?>
      <?php if($moment['MomentPage']['trimester'] == 1){ ?>
           
            <div class="pagina"> 
              <img class="print-header" src="http://momtomom.mx/apps/memorias_embarazo/img/print-header.png">

              <div class="print-content">

              <div class="print-page-title">
                <img class="print-title-page" src="http://momtomom.mx/apps/memorias_embarazo/img/titulo_back.png" >
                <p><?php echo $moment['MomentPage']['title']; ?></p>
              </div>

              <div class="print-form" id="momentoform"> 

                <img id="photo-back-momento" src="https://momtomom.mx/apps/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ', '%20', $moment['MomentPage']['photo']); ?>" />
                <img  src="http://momtomom.mx/apps/memorias_embarazo/img/marco.png" class="marco" id="photo_moment" />
                <span id="momento_p"><?php echo $moment['MomentPage']['description']; ?></span>

              </div>
            </div>

             <img class="print-footer" src="http://momtomom.mx/apps/memorias_embarazo/img/print-footer.png" width="100%" height="205">

          </div>      
        
      <?php } ?>
    <?php } ?>
<?php } } ?>


<?php if($trimestre == 2){ ?>
  <?php if( findit(2, $momentos) ){ ?>
  <?php foreach ($momentos as $moment){ ?>
      <?php if($moment['MomentPage']['trimester'] == 2){ ?>
        
           <div class="pagina"> 
              <img class="print-header" src="http://momtomom.mx/apps/memorias_embarazo/img/print-header.png">

              <div class="print-content">

              <div class="print-page-title">
                <img class="print-title-page" src="http://momtomom.mx/apps/memorias_embarazo/img/titulo_back.png" >
                <p><?php echo $moment['MomentPage']['title']; ?></p>
              </div>

              <div class="print-form" id="momentoform"> 

                <img id="photo-back-momento" src="https://momtomom.mx/apps/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ', '%20', $moment['MomentPage']['photo']); ?>" />
                <img  src="http://momtomom.mx/apps/memorias_embarazo/img/marco.png" class="marco" id="photo_moment" />
                <span id="momento_p"><?php echo $moment['MomentPage']['description']; ?></span>

              </div>
            </div>

             <img class="print-footer" src="http://momtomom.mx/apps/memorias_embarazo/img/print-footer.png" width="100%" height="205">

          </div>     
        
      <?php } ?>
    <?php } ?>
<?php } } ?>



<?php if($trimestre == 3){ ?>
  <?php if( findit(3, $momentos) ){ ?>
  <?php foreach ($momentos as $moment){ ?>
      <?php if($moment['MomentPage']['trimester'] == 3){ ?>
        
           <div class="pagina"> 
              <img class="print-header" src="http://momtomom.mx/apps/memorias_embarazo/img/print-header.png">

              <div class="print-content">

              <div class="print-page-title">
                <img class="print-title-page" src="http://momtomom.mx/apps/memorias_embarazo/img/titulo_back.png" >
                <p><?php echo $moment['MomentPage']['title']; ?></p>
              </div>

              <div class="print-form" id="momentoform"> 

                <img id="photo-back-momento" src="https://momtomom.mx/apps/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ', '%20', $moment['MomentPage']['photo']); ?>" />
                <img  src="http://momtomom.mx/apps/memorias_embarazo/img/marco.png" class="marco" id="photo_moment" />
                <span id="momento_p"><?php echo $moment['MomentPage']['description']; ?></span>

              </div>
            </div>

             <img class="print-footer" src="http://momtomom.mx/apps/memorias_embarazo/img/print-footer.png" width="100%" height="205">

          </div>     
        
      <?php } ?>
    <?php } ?>
<?php } } ?>


<?php } ?>

