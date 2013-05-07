<div class="animoPages form">
<?php echo $this->Form->create('AnimoPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Animo Page'); ?></legend>
	<?php
		echo $this->Form->input('month1_humor');
		echo $this->Form->input('month2_humor');
		echo $this->Form->input('month3_humor');
		echo $this->Form->input('month1_energy');
		echo $this->Form->input('month2_energy');
		echo $this->Form->input('month3_energy');
		echo $this->Form->input('month1_physical');
		echo $this->Form->input('month2_physical');
		echo $this->Form->input('month3_physical');
		echo $this->Form->input('month1_other');
		echo $this->Form->input('month2_other');
		echo $this->Form->input('month3_other');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Animo Pages'), array('action' => 'index')); ?></li>
	</ul>
</div>
