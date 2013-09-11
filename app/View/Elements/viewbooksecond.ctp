<?php $momentos = $this->requestAction('moment_pages/index'); ?>
<?php if(isset($momentos) && !empty($momentos)) {  ?>


<?php if($trimestre == 2){ ?>
  <?php if( findit(2, $momentos) ){ ?>
  <?php foreach ($momentos as $moment){ ?>
      <?php if($moment['MomentPage']['trimester'] == 2){ ?>
        
          <?php $photoback="photo-back-".rand(1, 9999); ?>

             
          <div> 
             <style type="text/css">
            <?php if( isset($moment['MomentPage']['photo']) ){ ?>
              #<?php echo $photoback; ?>{
                background-image: url(../../img/cover_photos/<?php echo str_replace(' ', '%20', $moment['MomentPage']['photo']); ?>);
                position: absolute;
                top: 62px;
                left: 117px;
                width: 175px;
                height: 133px;
                background-size: cover;
              }
            <?php } ?>
          </style>       
            <div class="book-header"></div>

            <div class="book-content">

              <div class="book-page-title">
                <div class="book-title-page">
                  <p><?php echo $moment['MomentPage']['title']; ?></p>
                </div>
              </div>

              <div class="book-form">

                <div id="<?php echo $photoback; ?>" class="ph-bg"></div>
                <div id="photo_moment_view"></div>
                
                <span id="momento_p"><?php echo $moment['MomentPage']['description']; ?></span>

              </div>
            
            </div>

           <div class="book-footer"></div>

        </div>
        
      <?php } ?>
    <?php } ?>
<?php } } ?>



<?php } ?>
