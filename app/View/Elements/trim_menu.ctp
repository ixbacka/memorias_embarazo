<!-- menu.ctp -->
<div class="menu_trims">
<?php if($trimestre == 1){ ?>
			<?php 
			echo $this->Html->link(
				    'Primer Trimestre',
				    array('controller' => 'congrats_pages', 'action' => 'add'),
				    array('class' => 'first_trim_current')
				);
			echo $this->Html->link(
				    'Segundo Trimestre',
				    array('controller' => 'ilovemybaby_pages', 'action' => 'add'),
				    array( 'class' => 'second_trim')
				);
			echo $this->Html->link(
				    'Tercer Trimestre',
				    array('controller' => 'gettingclose_pages', 'action' => 'add'),
				    array('class' => 'third_trim')
				);
		?>
<?php } elseif ($trimestre == 2) { ?>
			<?php 
			echo $this->Html->link(
				    'Primer Trimestre',
				    array('controller' => 'congrats_pages', 'action' => 'add'),
				    array('class' => 'first_trim')
				);
			echo $this->Html->link(
				    'Segundo Trimestre',
				    array('controller' => 'ilovemybaby_pages', 'action' => 'add'),
				    array( 'class' => 'second_trim_current')
				);
			echo $this->Html->link(
				    'Tercer Trimestre',
				    array('controller' => 'gettingclose_pages', 'action' => 'add'),
				    array('class' => 'third_trim')
				);
		?>
<?php } elseif ($trimestre == 3) { ?>
			<?php 
			echo $this->Html->link(
				    'Primer Trimestre',
				    array('controller' => 'congrats_pages', 'action' => 'add'),
				    array('class' => 'first_trim')
				);
			echo $this->Html->link(
				    'Segundo Trimestre',
				    array('controller' => 'ilovemybaby_pages', 'action' => 'add'),
				    array( 'class' => 'second_trim')
				);
			echo $this->Html->link(
				    'Tercer Trimestre',
				    array('controller' => 'gettingclose_pages', 'action' => 'add'),
				    array('class' => 'third_trim_current')
				);
		?>
<?php } ?> 
</div>