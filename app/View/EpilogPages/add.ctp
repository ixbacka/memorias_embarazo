<?php echo $this->element('menu', array( "trimestre" => 3, "pag" => "epilog")); ?>
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
				    array('controller' => 'welcomebby_pages', 'action' => 'add'),
				    array('class' => 'ant')
				);
	?>
	<div class="title_page">
		<p>Ep&iacute;logo</p>
		<span>de la panza</span>
	</div>
	<?php 
		echo $this->Html->link(
				    'Siguiente',
				    array('controller' => 'newfamily_pages', 'action' => 'add'),
				    array('class' => 'sig')
				);
	?>
</div>

	
	<div class="epilogPages form">
	<?php echo $this->Form->create('EpilogPage'); ?>

 	<?php
		if(isset($epilog['EpilogPage']['belly'])){
			$belly = $epilog['EpilogPage']['belly'];
		} else{
			$belly = '';
		}
  ?>
  <div class="opciones cf">
    <p>
      <input type="radio" name="data[NestingPage][belly]" value="1" <?php if($belly == 1){ echo 'checked="checked"'; } ?> />
      <label>¡Ay! todavia parezco embarazada</label>
    </p>
    <p>
      <input type="radio" name="data[NestingPage][belly]" value="2" <?php if($belly == 2){ echo 'checked="checked"'; } ?> />
      <label>¡Eh!  Sorpresivamente mi panza regresó a su talla normal</label>
    </p>
  </div>
  	<?php
		if(isset($epilog['EpilogPage']['notes'])){
			$notes =$epilog['EpilogPage']['notes'];
		} else{
			$notes = '';
		}
    ?>
    <p class="post-parto cf">
    	<label> Notas post parto y detalles que recordar: </label>
    	<input type="text" name="data[EpilogPage][notes]" value="<?php if($notes != ''){ echo $notes; } ?>" >
    </p>
	<?php
		echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
	?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
