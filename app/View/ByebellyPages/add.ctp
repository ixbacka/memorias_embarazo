<?php echo $this->Html->script('jquery-ui/js/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->script('functions'); ?>
<?php echo $this->Html->css('redmond/jquery-ui-1.10.3.custom.min'); ?>

<script type="text/javascript">

  $(document).ready(function(){

	<?php if(isset($byebelly['ByebellyPage']['byebelly_date'])){ 

			$source = $byebelly['ByebellyPage']['byebelly_date'];
			$date = new DateTime($source);
			$letime = strtotime($source);

			$mes = get_date_spanish($letime, true, 'month'); # return Enero

			$dia = $date->format('d'); // 31.07.2012
			$ano = $date->format('Y'); // 31-07-2012

			$byebelly_date = $dia.' '.$mes.' '.$ano;
			$monthi = ($date->format('m'))-1;
		?>
	 $( "#datepickerCongrats" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));	
	<?php } else{
				$byebelly_date = '';
			}
	?>

	});

</script>

<?php echo $this->element('menu', array( "trimestre" => 3, "pag" => "byebelly")); ?>
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
				    array('controller' => 'nesting_pages', 'action' => 'add'),
				    array('class' => 'ant')
				);
	?>
	<div class="title_page">
		<p>Adios pancita,</p>
		<span>bienvenido beb&eacute;</span>
	</div>
	<?php 
		echo $this->Html->link(
				    'Siguiente',
				    array('controller' => 'specialdelivery_pages', 'action' => 'add'),
				    array('class' => 'sig')
				); 
  ?>
  </div>
	<div class="byebellyPages form">
    <?php echo $this->Form->create('ByebellyPage'); ?>

    <p class="contacciones">
      <label>El d&iacute;a:</label>
      <input type="text" id="datepickerCongrats" size="30" readonly="readonly"  value="<?php if($byebelly_date != ''){ echo $byebelly_date; } ?>"/>
      <input type="hidden" name="data[ByebellyPage][byebelly_date][month]" id="CongratsPagePruebaMonth" />
      <input type="hidden" name="data[ByebellyPage][byebelly_date][day]" id="CongratsPagePruebaDay" />
      <input type="hidden" name="data[ByebellyPage][byebelly_date][year]" id="CongratsPagePruebaYear" />
      comenzaron las contracciones.
    </p>
    <p> ¡Ay no, ay no, que nervios! mi labor de parto comenzó: </p>
    <?php
      if(isset($byebelly['ByebellyPage']['itstarted'])){
        $itstarted = $byebelly['ByebellyPage']['itstarted'];
      } else{
        $itstarted = '';
      }
      if(isset($byebelly['ByebellyPage']['days'])){
        $days = $byebelly['ByebellyPage']['days'];
      } else{
        $days = '';
    } ?>
    <div class="opciones">
      <p class="opcion cf">
        <input type="radio" name="data[ByebellyPage][itstarted]" value="1" <?php if($itstarted == 1){ echo 'checked="checked"'; } ?> />
        <label>
          <input type="number" value="<?php if($days != '' && $itstarted == 1){ echo $days; } ?>" name="data[ByebellyPage][days]"> días antes de mi fecha programada
        </label>
      </p>
      <p class="opcion cf">
        <input type="radio" name="data[ByebellyPage][itstarted]" value="2" <?php if($itstarted == 2){ echo 'checked="checked"'; } ?> />
        <label>
          <input type="number" value="<?php if($days != '' && $itstarted == 2 ){ echo $days; } ?>" name="data[ByebellyPage][days]"> días tarde (¡Sáquenmelo!)
        </label>
      </p>
      <p class="opcion cf">
        <input type="radio" name="data[ByebellyPage][itstarted]" value="3" <?php if($itstarted == 3){ echo 'checked="checked"'; } ?> />
        <label>Justo a tiempo</label>
      </p>
      <p class="nota"> Ninguna de las anteriores: </p>
      <p class="opcion cf">
        <input type="radio" name="data[ByebellyPage][itstarted]" value="4" <?php if($itstarted == 4){ echo 'checked="checked"'; } ?> />
        <label>Fue inducido</label>
      </p>
      <p class="opcion cf">
        <input type="radio" name="data[ByebellyPage][itstarted]" value="5" <?php if($itstarted == 5){ echo 'checked="checked"'; } ?> />
        <label>Por ces&aacute;rea</label>
      </p>
    </div>
    <?php
      if(isset($byebelly['ByebellyPage']['hours'])){
        $hours = $byebelly['ByebellyPage']['hours'];
      } else{
        $hours = '';
    }	?>
    <p class="horas">
      <label>Total de horas en labor de parto </label>
      <input type="text" name="data[ByebellyPage][hours]" value="<?php if($hours != ''){ echo $hours; } ?>" >
    </p>

    <?php if(isset($byebelly['ByebellyPage']['iwas'])){
        $iwas = $byebelly['ByebellyPage']['iwas'];
      } else{
        $iwas = '';
    } ?>
    <div class="estaba">
      <label>Cuando comenzaron las contracciones yo estaba: </label>
      <input type="text" name="data[ByebellyPage][iwas]" value="<?php if($iwas != ''){ echo $iwas; } ?>" >
    </div>

    <?php if(isset($byebelly['ByebellyPage']['experience'])){
        $experience = $byebelly['ByebellyPage']['experience'];
      } else{
        $experience = '';
      } ?>
    <div class="exp">
      <label>La experiencia completa de la labor de parto: </label>
      <input type="text" name="data[ByebellyPage][experience]" value="<?php if($experience != ''){ echo $experience; } ?>" >
    </div>

    <?php echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid)); ?>
    <?php echo $this->Form->end(__('Submit')); ?>
  </div>
</div>
