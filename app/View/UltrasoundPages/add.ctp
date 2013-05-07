<div class="ultrasoundPages form">
<?php echo $this->Form->create('UltrasoundPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Ultrasound Page'); ?></legend>
	<?php
		echo $this->Form->input('first_date');
		echo $this->Form->input('first_week');
		echo $this->Form->input('first_photo');
		echo $this->Form->input('first_notes');
		echo $this->Form->input('second_date');
		echo $this->Form->input('second_week');
		echo $this->Form->input('second_photo');
		echo $this->Form->input('second_notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ultrasound Pages'), array('action' => 'index')); ?></li>
	</ul>
</div>
