<div class="bellymonthPages form">
<?php echo $this->Form->create('BellymonthPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Bellymonth Page'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('actual_weight');
		echo $this->Form->input('measurements');
		echo $this->Form->input('apetite');
		echo $this->Form->input('b4');
		echo $this->Form->input('sleep');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bellymonth Pages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
