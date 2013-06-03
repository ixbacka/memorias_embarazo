<?php echo $this->element('menu', array( "trimestre" => 3, "pag" => "welcomebby")); ?>
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
				    array('controller' => 'specialdelivery_pages', 'action' => 'add'),
				    array('class' => 'ant')
				);
	?>
	<div class="title_page">
		<p>M&aacute;s detalles</p>
		<span>de tu llegada</span>
	</div>
	<?php 
		echo $this->Html->link(
				    'Siguiente',
				    array('controller' => 'epilog_pages', 'action' => 'add'),
				    array('class' => 'sig')
				);
	?>
</div>

	
	<div class="welcomebbyPages form">
	<?php echo $this->Form->create('WelcomebbyPage'); ?>

  	<?php
		if(isset($welcome['WelcomebbyPage']['ulooklike'])){
			$ulooklike = $welcome['WelcomebbyPage']['ulooklike'];
		} else{
			$ulooklike = '';
		}
  ?>
  <p class="pareces">
  	<label> Todo el mundo opina que te pareces a: </label>
    <input type="text" name="data[WelcomebbyPage][ulooklike]" value="<?php if($ulooklike != ''){ echo $ulooklike; } ?>" >
  </p>
  <?php
    if(isset($welcome['WelcomebbyPage']['whocutit'])){
      $whocutit = $welcome['WelcomebbyPage']['whocutit'];
    } else{
      $whocutit = '';
    }
  ?>
  <p class="cordon">
  	<label> El cord&oacute;n umbilical lo cort&oacute;: </label>
  	<input type="text" name="data[WelcomebbyPage][whocutit]" value="<?php if($whocutit != ''){ echo $whocutit; } ?>" >
  </p>
  <?php
		if(isset($welcome['WelcomebbyPage']['ifelt'])){
			$ifelt = $welcome['WelcomebbyPage']['ifelt'];
		} else{
			$ifelt = '';
		}
  ?>
  <p class="tevi">
    <label> Cuando te vi por primera vez sentí: </label>
  	<input type="text" name="data[WelcomebbyPage][ifelt]" value="<?php if($ifelt != ''){ echo $ifelt; } ?>" >
  </p>
  <?php
		if(isset($welcome['WelcomebbyPage']['wheniholdu'])){
			$wheniholdu = $welcome['WelcomebbyPage']['wheniholdu'];
		} else{
			$wheniholdu = '';
		}
  ?>
  <p class="brazos">
    <label> Y cuando te pusieron en mis brazos, yo </label>
  	<input type="text" name="data[WelcomebbyPage][wheniholdu]" value="<?php if($wheniholdu != ''){ echo $wheniholdu; } ?>" >
  </p>
  <?php
		if(isset($welcome['WelcomebbyPage']['metu'])){
			$metu = $welcome['WelcomebbyPage']['metu'];
		} else{
			$metu = '';
		}
  ?>
  <p class="conocer">
  	<label> Te fueron a conocer: </label>
  	<input type="text" name="data[WelcomebbyPage][metu]" value="<?php if($metu != ''){ echo $metu; } ?>" >
  </p>
  <?php
		if(isset($welcome['WelcomebbyPage']['tilday'])){
			$tilday = $welcome['WelcomebbyPage']['tilday'];
		} else{
			$tilday = '';
		}
  ?>
  <p class="hospital">
  	<label> Estuvimos en el hospital hasta el día </label>
  	<input type="text" name="data[WelcomebbyPage][tilday]" value="<?php if($tilday != ''){ echo $tilday; } ?>" >
  </p>
  <?php
		if(isset($welcome['WelcomebbyPage']['nighttime'])){
			$nighttime = $welcome['WelcomebbyPage']['nighttime'];
		} else{
			$nighttime = '';
		}
  ?>
  <p class="noche">
    <label> y la experiencia de la primera noche en casa es digna de contarse: </label>
  	<input type="text" name="data[WelcomebbyPage][nighttime]" value="<?php if($nighttime != ''){ echo $nighttime; } ?>" >
  </p>
	<?php
		if(isset($welcome['WelcomebbyPage']['most'])){
			$most = $welcome['WelcomebbyPage']['most'];
		} else{
			$most = '';
		}
  ?>
  <p class="emotivo">
  	<label> Deﬁnitivamente lo más emotivo de tenerte en mi pancita fue: </label>
  	<input type="text" name="data[WelcomebbyPage][most]" value="<?php if($most != ''){ echo $most; } ?>" >
  </p>

	<?php
		echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
	?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
