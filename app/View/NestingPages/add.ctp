<div class="nestingPages form">
<?php echo $this->Form->create('NestingPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Nesting Page'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('nest');
		echo $this->Form->input('buy1');
		echo $this->Form->input('buy2');
		echo $this->Form->input('buy3');
		echo $this->Form->input('room_photo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Nesting Pages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
