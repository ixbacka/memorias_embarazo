
<script type="text/javascript">
$(document).ready(function(){

   var radios = $(':radio');


  // when the radio selection is changed, fire 
  // the uncheck event on the selected radio's 
  // sibling that was checked
  radios.on('change', function() {
    var siblings = $(':radio[name="' + this.name + '"]').not(this);

    siblings.each(function() {
      var sibling = $(this);
      if (sibling.data('ischecked')) {
        sibling.trigger('uncheck');
      }  
    });
  });

  // custom check / uncheck events
  radios.on('check uncheck', function(e) {
    var checked = (e.type === 'check');
    $(this).data('ischecked', checked).attr('checked', checked);
  });

  // make sure all radios have the necessary 
  // ischecked flag on DOM ready
  radios.filter(':checked').each(function(i, r) {
    $(this).trigger('check');
  });
});

</script>

<?php echo $this->element('menu', array( "trimestre" => 1, "pag" => "animo")); ?>
<?php
//tenemos que poner el boton de la nubeshita. 
/*
  adentro de ese boton va esto:
  echo $this->Html->link(
            'Add Moment',
            array('controller' => 'moment_pages', 'action' => 'add',0,1),
            array('class' => 'add_moment')
        );
*/
?>
<a href="#" class="add_moment" id="my-moments">Moments</a>

    <div id="moments_popup">
        <div id="popup_moments"> <!--your content start-->
          <?php echo $this->element('moments'); ?>
          <?php 
            // echo $this->Html->link(
            //     'Agrega un momento',
            //     array('controller' => 'moment_pages', 'action' => 'add',0,1)
            // );
          ?>
          <a href="1" class="addnew-momento" id="mayiadd-moments" >Agrega una memoria</a>
        </div> <!--your content end-->
    </div> <!--toPopup end-->

<div id="dialog-box-momento" class="dialog-popup"></div>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 1)); ?>

<div class="page_title">
	<?php
			echo $this->Html->link(
				    'Anterior',
				    array('controller' => 'belly_pages', 'action' => 'add'),
				    array('class' => 'ant')
				);
	?>
	<div class="title_page">
		<p>Mi ánimo</p>
		<span>mes a mes</span>
	</div>
	<?php
      echo $this->Html->link(
            'Siguiente',
            array('controller' => 'ilovemybaby_pages', 'action' => 'add'),
            array('class' => 'sig')
        );
  ?>
</div>
<div class="animoPages form">
  <?php echo $this->Form->create('AnimoPage'); ?>
    <div class="meses cf">
      <h3>Mes 1</h3>
      <h3>Mes 2</h3>
      <h3>Mes 3</h3>
    </div>
    <div class="mi-humor cf">
      <!-- etiquetas de humor -->
      <div class="col1">
        <h4>Mi humor es: </h4>
        <p>Feliz y sonriente</p> <!-- value = 1 -->
        <p>Huracán Hormonal</p> <!-- value = 2 -->
        <p>Mitad soleado - Mitad lluvioso</p> <!-- value = 3 -->
      </div>

      <!-- mes 1 - humor -->
      <div class="col2">
        <?php
          if(isset($animo['AnimoPage']['month1_humor'])){
            $month1_humor = $animo['AnimoPage']['month1_humor'];
          } else{
            $month1_humor = '';
          }
        ?>
        <input type="radio" name="data[AnimoPage][month1_humor]" value="1" <?php if($month1_humor == 1){
        echo 'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month1_humor]" value="2" <?php if($month1_humor == 2){
        echo 'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month1_humor]" value="3" <?php if($month1_humor == 3){
        echo 'checked="checked"'; } ?> />
      </div>

      <!-- mes 2 - humor -->
      <div class="col3">
        <?php
          if(isset($animo['AnimoPage']['month2_humor'])){
            $month2_humor = $animo['AnimoPage']['month2_humor'];
          } else{
            $month2_humor = '';
          }
        ?>
        <input type="radio" name="data[AnimoPage][month2_humor]" value="1" <?php if($month2_humor == 1){
          echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month2_humor]" value="2" <?php if($month2_humor == 2){
          echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month2_humor]" value="3" <?php if($month2_humor == 3){
          echo  'checked="checked"'; } ?> />
      </div>

      <!-- mes 3 - humor -->
      <div class="col4">
        <?php
          if(isset($animo['AnimoPage']['month3_humor'])){
            $month3_humor = $animo['AnimoPage']['month3_humor'];
          } else{
            $month3_humor = '';
          }
        ?>
        <input type="radio" name="data[AnimoPage][month3_humor]" value="1" <?php if($month3_humor == 1){
        echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month3_humor]" value="2" <?php if($month3_humor == 2){
        echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month3_humor]" value="3" <?php if($month3_humor == 3){
          echo  'checked="checked"'; } ?> />
      </div>
    </div>

    <div class="mi-energia cf">
      <div class="col1">
        <!-- etiquetas de energia -->
        <h4>Mi nivel de energía es:</h4>
        <p>Relativamente normal</p> <!-- value = 1 -->
        <p>Con un poco de sueño</p> <!-- value = 2 -->
      </div>
      <div class="col2">
        <!-- mes 1 - energia -->
        <?php
          if(isset($animo['AnimoPage']['month1_energy'])){
            $month1_energy = $animo['AnimoPage']['month1_energy'];
          } else{
            $month1_energy = '';
          }
        ?>
        <input type="radio" name="data[AnimoPage][month1_energy]" value="1" <?php if($month1_energy == 1){
        echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month1_energy]" value="2" <?php if($month1_energy == 2){
        echo  'checked="checked"'; } ?> />
      </div>
      <div class="col3">
        <!-- mes 2 - energia -->
        <?php
          if(isset($animo['AnimoPage']['month2_energy'])){
            $month2_energy = $animo['AnimoPage']['month2_energy'];
          } else{
            $month2_energy = '';
          }
        ?>
        <input type="radio" name="data[AnimoPage][month2_energy]" value="1" <?php if($month2_energy == 1){
          echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month2_energy]" value="2" <?php if($month2_energy == 2){
          echo  'checked="checked"'; } ?> />
      </div>
      <div class="col4">
        <!-- mes 3 - energia -->
        <?php
          if(isset($animo['AnimoPage']['month3_energy'])){
            $month3_energy = $animo['AnimoPage']['month3_energy'];
          } else{
            $month3_energy = '';
          }
        ?>
        <input type="radio" name="data[AnimoPage][month3_energy]" value="1" <?php if($month3_energy == 1){
          echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month3_energy]" value="2" <?php if($month3_energy == 2){
          echo  'checked="checked"'; } ?> />
      </div>
    </div>

    <div class="mi-fisico cf">
      <div class="col1">
        <!-- etiquetas de fisico -->
        <h4>El cambio físico que más he percibido: </h4>
        <p>Mis pantalones aún me quedan</p> <!-- value = 1 -->
        <p>¡Ups! medio me aprietan</p> <!-- value = 2 -->
        <p> ¡Auxilio! Traigan el costal de papas</p> <!-- value = 3 -->
      </div>

       <!-- mes 1 - fisico -->
      <div class="col2">
        <?php
          if(isset($animo['AnimoPage']['month1_physical'])){
            $month1_physical = $animo['AnimoPage']['month1_physical'];
          } else{
            $month1_physical = '';
          }
        ?>
        <input type="radio" name="data[AnimoPage][month1_physical]" value="1" <?php if($month1_physical == 1){
        echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month1_physical]" value="2" <?php if($month1_physical == 2){
        echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month1_physical]" value="3" <?php if($month1_physical == 3){
        echo 'checked="checked"'; } ?> />
      </div>

      <div class="col3">
       <!-- mes 2 - fisico -->
        <?php
          if(isset($animo['AnimoPage']['month2_physical'])){
            $month2_physical = $animo['AnimoPage']['month2_physical'];
          } else{
            $month2_physical = '';
          }
        ?>
        <input type="radio" name="data[AnimoPage][month2_physical]" value="1" <?php if($month2_physical == 1){
        echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month2_physical]" value="2" <?php if($month2_physical == 2){
        echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month2_physical]" value="3" <?php if($month2_physical == 3){
        echo  'checked="checked"'; } ?> />
      </div>

      <div class="col4">
       <!-- mes 3 - fisico -->
        <?php
          if(isset($animo['AnimoPage']['month3_physical'])){
            $month3_physical = $animo['AnimoPage']['month3_physical'];
          } else{
            $month3_physical = '';
          }
        ?>
        <input type="radio" name="data[AnimoPage][month3_physical]" value="1" <?php if($month3_physical == 1){
        echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month3_physical]" value="2" <?php if($month3_physical == 2){
        echo  'checked="checked"'; } ?> />
        <input type="radio" name="data[AnimoPage][month3_physical]" value="3" <?php if($month3_physical == 3){
          echo  'checked="checked"'; } ?> />
      </div>
    </div>

    <div class="mi-otros cf">
      <div class="col1">
        <p>Otro</p>
      </div>
      <!-- otros ......  -->
      <div class="col2">
        <!-- mes 1 -->
        <?php
          if(isset($animo['AnimoPage']['month1_other'])){
            $month1_other = $animo['AnimoPage']['month1_other'];
          } else{
            $month1_other = '';
          }
        ?>
        <input type="text" name="data[AnimoPage][month1_other]" value="<?php if($month1_other != ''){
        echo $month1_other; } ?>" />
        <?php
          if(isset($animo['AnimoPage']['month1_other_1'])){
            $month1_other_1 = $animo['AnimoPage']['month1_other_1'];
          } else{
            $month1_other_1 = '';
          }
        ?>
        <input type="text" name="data[AnimoPage][month1_other_1]" value="<?php if($month1_other_1 != ''){
        echo $month1_other_1; } ?>" />
      </div>
      <div class="col3">
        <!-- mes 2 -->
        <?php
          if(isset($animo['AnimoPage']['month2_other'])){
            $month2_other = $animo['AnimoPage']['month2_other'];
          } else{
            $month2_other = '';
          }
        ?>
        <input type="text" name="data[AnimoPage][month2_other]" value="<?php if($month2_other != ''){
        echo $month2_other; } ?>" />
          <?php
          if(isset($animo['AnimoPage']['month2_other_1'])){
            $month2_other_1 = $animo['AnimoPage']['month2_other_1'];
          } else{
            $month2_other_1 = '';
          }
        ?>
        <input type="text" name="data[AnimoPage][month2_other_1]" value="<?php if($month2_other_1 != ''){
        echo $month2_other_1; } ?>" />
      </div>
      <div class="col4">
        <!-- mes 3 -->
        <?php
          if(isset($animo['AnimoPage']['month3_other'])){
            $month3_other = $animo['AnimoPage']['month3_other'];
          } else{
            $month3_other = '';
          }
        ?>
        <input type="text" name="data[AnimoPage][month3_other]" value="<?php if($month3_other != ''){
        echo $month3_other; } ?>" />
        <?php
          if(isset($animo['AnimoPage']['month3_other_1'])){
            $month3_other_1 = $animo['AnimoPage']['month3_other_1'];
          } else{
            $month3_other_1 = '';
          }
        ?>
        <input type="text" name="data[AnimoPage][month3_other_1]" value="<?php if($month3_other_1 != ''){
          echo $month3_other_1; } ?>" />
      </div>
    </div>
    <?php echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid)); ?>
    <?php echo $this->Form->end(__('Submit')); ?>
  </div>
</div>

