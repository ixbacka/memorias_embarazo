<div class="bellyPages form">
<?php echo $this->Form->create('BellyPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Belly Page'); ?></legend>
	<?php
		echo $this->Form->input('photo1');
		echo $this->Form->input('photo2');
		echo $this->Form->input('photo3');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Belly Pages'), array('action' => 'index')); ?></li>
	</ul>
</div>
