<div class="ilovemybabyPages form">
<?php echo $this->Form->create('IlovemybabyPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Ilovemybaby Page'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('today');
		echo $this->Form->input('heartbeat');
		echo $this->Form->input('first_feeling');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ilovemybaby Pages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
