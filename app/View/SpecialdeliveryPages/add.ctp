<div class="specialdeliveryPages form">
<?php echo $this->Form->create('SpecialdeliveryPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Specialdelivery Page'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('photo');
		echo $this->Form->input('uare');
		echo $this->Form->input('birthday');
		echo $this->Form->input('hour');
		echo $this->Form->input('location');
		echo $this->Form->input('itwas');
		echo $this->Form->input('weightnmeasures');
		echo $this->Form->input('urhairneyes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Specialdelivery Pages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
