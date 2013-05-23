<?php echo $this->Html->script('functions'); ?>

<style type="text/css">
body{
	height: 1170px;
}
.footer{
	position: absolute;
	top: 970px;
	left: 0px;
}

.title_page span{
	top: 42px;
	position: absolute;
	left: 320px;
}
</style>

	<div class="header">	
		<ul class="menu">
			<li class="ask">FAQ</li>
			<li class="settings">Settings</li>
			<li class="home">Home</li>
		</ul>
	</div>

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
				    array('controller' => 'congrats_pages', 'action' => 'add'),
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
				    array('controller' => 'belly_pages', 'action' => 'add'),
				    array('class' => 'ant')
				);
	?>
	<div class="title_page">
		<p>Mi ánimo</p>
		<span>mes a mes</span>
	</div>
	<div class="sig">Siguiente</div>
</div>

	<div class="animoPages form">
<?php echo $this->Form->create('AnimoPage'); ?>

  <!-- etiquetas de humor -->
  <p>Mi humor es: </p>
  <p>Feliz y sonriente</p> <!-- value = 1 -->
  <p>Huracán Hormonal</p> <!-- value = 2 -->
  <p>Mitad soleado - Mitad lluvioso</p> <!-- value = 3 -->

  <!-- mes 1 - humor -->
  <h3>Mes 1</h3>
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

   <!-- mes 2 - humor -->
  <h3>Mes 2</h3>
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

  <!-- mes 3 - humor -->
  <h3>Mes 3</h3>
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

   <!-- etiquetas de energia -->
  <p>Mi nivel de energía es: </p>
  <p>Relativamente normal</p> <!-- value = 1 -->
  <p>Con un poco de sueño</p> <!-- value = 2 -->

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


  <!-- etiquetas de fisico -->
  <p>El cambio físico que más he percibido: </p>
  <p>Mis pantalones aún me quedan</p> <!-- value = 1 -->
  <p>¡Ups! medio me aprietan</p> <!-- value = 2 -->
  <p> ¡Auxilio! Traigan el costal de papas Otro </p> <!-- value = 3 -->

 <!-- mes 1 - fisico -->
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
 	<input type="radio" name="data[AnimoPage][month1_physical]" value="3" <?php if($month1_physical == 2){
  echo 'checked="checked"'; } ?> />

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
 	<input type="radio" name="data[AnimoPage][month2_physical]" value="3" <?php if($month2_physical == 2){
  echo  'checked="checked"'; } ?> />


 <!-- mes 3 - fisico -->
  <?php
		if(isset($animo['AnimoPage']['month3_physical'])){
			$month3_physical = $animo['AnimoPage']['month3_physical'];
		} else{
			$month3_physical = '';
		}
  ?>
  <input type="radio" name="data[AnimoPage][month3_physical]" value="1" <?php if($month3_physical == 1){
	echo  checked="checked" } ?> />
 	<input type="radio" name="data[AnimoPage][month3_physical]" value="2" <?php if($month3_physical == 2){
  echo  checked="checked" } ?> />
 	<input type="radio" name="data[AnimoPage][month3_physical]" value="3" <?php if($month3_physical == 2){
  echo  checked="checked" } ?> />

  <!-- otros ......  -->
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


		<?php
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