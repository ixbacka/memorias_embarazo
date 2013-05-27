<!-- add.ctp -->
<?php //echo $this->Html->script('functions'); ?>

<style type="text/css">

.title_page span {
top: 42px;
position: absolute;
left: 319px;
}

.title_page p{
	margin-left: -2px;
}

.footer{
	top: 970px;
}

body{
	width: 810px;
	height: 1170px;
}

</style>

<?php echo $this->element('menu', array( "trimestre" => 1, 'pag' => 'sintom')); ?>

<?php
		echo $this->Html->link(
				    'Add Moment',
				    array('controller' => 'moment_pages', 'action' => 'add', 0, 1),
				    array('class' => 'add_moment')
				);
	?>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 1)); ?>

<div class="page_title">
	<div class="ant">Anterior</div>

	<div class="title_page"><p>Súper cool</p>
		<span>fotos del ultrasonido</span>
	</div>
	<p class="middle_note">Cariño me puedes detener el cabello SOS... no me siento tan bien!</p>
	<?php

			echo $this->Html->link(
				    'Siguiente',
				    array('controller' => 'ultrasound_pages', 'action' => 'add'),
				    array('class' => 'sig')
				);
	?>
</div>

	<div class="sintomPages form">
<?php echo $this->Form->create('SintomPage'); ?>
	<?php

	if(isset($sintoms['SimtomPage']['matutinos'])){
		$matutinos = $sintoms['SimtomPage']['matutinos'];
	} else{
		$matutinos = '';
	}
		echo $this->Form->input('matutinos', array('label' => 'Ouch, empiezan los malestares matutinos y yo me siento: ', 'value' => $matutinos )); 

	if(isset($sintoms['SimtomPage']['worst'])){
		$worst = $sintoms['SimtomPage']['worst'];
	} else{
		$worst = '';
	}
		echo $this->Form->input('worst', array('label' => 'Pero cuando me siento peor es: ','after' => '</span>','between' => '<span>', 'value' => $worst));?>
	<div class="sintom_left">
	<p class="title_form" id="cravings">Antojos</p>
	<div class="sintom_inputs" id="cravings_">
	<?php
	if(isset($sintoms['SimtomPage']['craving1'])){
		$craving1 = $sintoms['SimtomPage']['craving1'];
	} else{
		$craving1 = '';
	}
		if(isset($sintoms['SimtomPage']['craving2'])){
		$craving2 = $sintoms['SimtomPage']['craving2'];
	} else{
		$craving2 = '';
	}
		if(isset($sintoms['SimtomPage']['craving3'])){
		$craving3 = $sintoms['SimtomPage']['craving3'];
	} else{
		$craving3 = '';
	}
		if(isset($sintoms['SimtomPage']['craving4'])){
		$craving4 = $sintoms['SimtomPage']['craving4'];
	} else{
		$craving4 = '';
	}
		if(isset($sintoms['SimtomPage']['craving5'])){
		$craving5 = $sintoms['SimtomPage']['craving5'];
	} else{
		$craving5 = '';
	}
		if(isset($sintoms['SimtomPage']['craving6'])){
		$craving6 = $sintoms['SimtomPage']['craving6'];
	} else{
		$craving6 = '';
	}
			echo $this->Form->input('craving1', array('label' => false, 'div' => false, 'value' => $craving1));
			echo $this->Form->input('craving2', array('label' => false, 'div' => false, 'value' => $craving2));
			echo $this->Form->input('craving3', array('label' => false, 'div' => false, 'value' => $craving3));
			echo $this->Form->input('craving4', array('label' => false, 'div' => false, 'value' => $craving4));
			echo $this->Form->input('craving5', array('label' => false, 'div' => false, 'value' => $craving5));
			echo $this->Form->input('craving6', array('label' => false, 'div' => false, 'value' => $craving6));
	?>
	</div>
	<p class="title_form" id="gross">Ascos</p>
	<div class="sintom_inputs"  id="gross_">
		<?php

		if(isset($sintoms['SimtomPage']['gross1'])){
			$gross1 = $sintoms['SimtomPage']['gross1'];
		} else{
			$gross1 = '';
		}
			if(isset($sintoms['SimtomPage']['gross2'])){
			$gross2 = $sintoms['SimtomPage']['gross2'];
		} else{
			$gross2 = '';
		}
			if(isset($sintoms['SimtomPage']['gross3'])){
			$gross3 = $sintoms['SimtomPage']['gross3'];
		} else{
			$gross3 = '';
		}
			if(isset($sintoms['SimtomPage']['gross4'])){
			$gross4 = $sintoms['SimtomPage']['gross4'];
		} else{
			$gross4 = '';
		}
			if(isset($sintoms['SimtomPage']['gross5'])){
			$gross5 = $sintoms['SimtomPage']['gross5'];
		} else{
			$gross5 = '';
		}
			if(isset($sintoms['SimtomPage']['gross6'])){
			$gross6 = $sintoms['SimtomPage']['gross6'];
		} else{
			$gross6 = '';
		}
				echo $this->Form->input('gross1', array('label' => false, 'div' => false, 'value' => $gross1));
				echo $this->Form->input('gross2', array('label' => false, 'div' => false, 'value' => $gross2));
				echo $this->Form->input('gross3', array('label' => false, 'div' => false, 'value' => $gross3));
				echo $this->Form->input('gross4', array('label' => false, 'div' => false, 'value' => $gross4));
				echo $this->Form->input('gross5', array('label' => false, 'div' => false, 'value' => $gross5));
				echo $this->Form->input('gross6', array('label' => false, 'div' => false, 'value' => $gross6));
		?>
	</div>
</div>
<div class="sintom_rite">
	<?php 

		if(isset($sintoms['SimtomPage']['cravings'])){
			$cravings = $sintoms['SimtomPage']['cravings'];
		} else{
			$cravings = '';
		}
			echo $this->Form->input('cravings', array('label' => 'El antojito más raro que he tenido es: ', 'value' => $cravings )); 
		?>

		<?php

		if(isset($sintoms['SimtomPage']['weirdestcraving'])){
			$weirdestcraving = $sintoms['SimtomPage']['weirdestcraving'];
		} else{
			$weirdestcraving = '';
		}
			echo $this->Form->input('weirdestcraving', array('label' => 'El antojito más raro que he tenido es: ', 'value' => $weirdestcraving )); 
	?>
</div>
		<?php
			echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
		?>	
		<?php echo $this->Form->end(array(
					    'label' => 'Submit',
					    'div' => array(
					        'id' => 'button_sintom',
					    )
					));
		?>
</div>
<p class="note_sintom_">Hay que darle a la panza lo que pide. ¿No? Tengo que cuidar mi peso.</p>
</div>
	<div class="footer">
		<div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
		<a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
		<a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
	</div>
