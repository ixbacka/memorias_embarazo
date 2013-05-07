<div class="sintomPages form">
<?php echo $this->Form->create('SintomPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Sintom Page'); ?></legend>
	<?php
		echo $this->Form->input('matutinos');
		echo $this->Form->input('worst');
		echo $this->Form->input('craving1');
		echo $this->Form->input('craving2');
		echo $this->Form->input('craving3');
		echo $this->Form->input('craving4');
		echo $this->Form->input('craving5');
		echo $this->Form->input('craving6');
		echo $this->Form->input('weirdestcraving');
		echo $this->Form->input('gross1');
		echo $this->Form->input('gross2');
		echo $this->Form->input('gross3');
		echo $this->Form->input('gross4');
		echo $this->Form->input('gross5');
		echo $this->Form->input('gross6');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sintom Pages'), array('action' => 'index')); ?></li>
	</ul>
</div>
