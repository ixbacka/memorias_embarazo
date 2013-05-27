<?php echo $this->Html->script('jquery-ui/js/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->css('redmond/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->script('functions'); ?>


<?php if(isset($ilovemybby['IlovemybabyPage']['today'])){ 

			$source = $ilovemybby['IlovemybabyPage']['today'];
			$date = new DateTime($source);
			$letime = strtotime($source);

			$mes = get_date_spanish($letime, true, 'month'); # return Enero

			$dia = $date->format('d'); // 31.07.2012
			$ano = $date->format('Y'); // 31-07-2012

			$today = $dia.' '.$mes.' '.$ano;
			$monthi = ($date->format('m'))-1;
		?>
<script type="text/javascript">
$(document).ready(function(){

	 $( "#datepickerCongrats" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));	
});

</script>
<?php } else{
			$today = '';
		}
?>
<?php echo $this->element('menu', array( "trimestre" => 2, , "pag" => "ilovemybaby")); ?>
<?php
		echo $this->Html->link(
				    'Add Moment',
				    array('controller' => 'moment_pages', 'action' => 'add'),
				    array('class' => 'add_moment')
				);
	?>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 2)); ?>

<div class="page_title">
	<?php
			echo $this->Html->link(
				    'Anterior',
				    array('controller' => 'animo_pages', 'action' => 'add'),
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
				    array('controller' => 'childsex_pages', 'action' => 'add'),
				    array('class' => 'sig')
				);
	?>
</div>

	<div class="ilovemybabyPages form">
<?php echo $this->Form->create('IlovemybabyPage'); ?>
  
  <label for="IlovemybabyPageToday">Hoy </label>
	<input type="text" id="datepickerCongrats" size="30" readonly="readonly"  value="<?php if($today != ''){
    		echo $today; } ?>"/>
	<input type="hidden" name="data[IlovemybabyPage][today][month]" id="CongratsPagePruebaMonth" />
	<input type="hidden" name="data[IlovemybabyPage][today][day]" id="CongratsPagePruebaDay" />
	<input type="hidden" name="data[IlovemybabyPage][today][year]" id="CongratsPagePruebaYear" />
	<p>nunca lo olvidaré porque oí tu corazón por primera vez</p>	
  
  <?php
		if(isset($ilovemybby['IlovemybabyPage']['heartbeat'])){
			$heartbeat = $ilovemybby['IlovemybabyPage']['heartbeat'];
		} else{
			$heartbeat = '';
		}
  ?>
  <p>Tac, tac, sonaba como: </p>

	<label>Caballos Galopantes</label>  
  <input type="radio" name="data[IlovemybabyPage][heartbeat]" value="1" <?php if($heartbeat == 1){
	echo  'checked="checked"'; } ?> />

		<label>Como un tambor</label>
 	<input type="radio" name="data[IlovemybabyPage][heartbeat]" value="2" <?php if($heartbeat == 2){
  echo 'checked="checked"'; } ?> />

  	<label>Un mar de emociones</label>
 	<input type="radio" name="data[IlovemybabyPage][heartbeat]" value="3" <?php if($heartbeat == 3){
  echo 'checked="checked"'; } ?> />
	
	<?php
		if(isset($ilovemybby['IlovemybabyPage']['first_feeling'])){
			$first_feeling = $ilovemybby['IlovemybabyPage']['first_feeling'];
		} else{
			$first_feeling = '';
		}
  ?>
  <label for="IlovemybabyPageFirstFeeling">y lo primero que sentí fue: </label>
	<input type="text" name="data[IlovemybabyPage][first_feeling]" value="<?php if($first_feeling != ''){ echo $first_feeling; } ?>"/>  

		<?php
			echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
		?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
