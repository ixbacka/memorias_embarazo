<div class="coolultrasoundPages form">
<?php echo $this->Form->create('CoolultrasoundPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Coolultrasound Page'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('ultrasound_date');
		echo $this->Form->input('iwas');
		echo $this->Form->input('doctorsaid');
		echo $this->Form->input('photo');
		echo $this->Form->input('urdad');
		echo $this->Form->input('urdadsays');
		echo $this->Form->input('imiss');
		echo $this->Form->input('theythink');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Coolultrasound Pages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
