<div class="byebellyPages form">
<?php echo $this->Form->create('ByebellyPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Byebelly Page'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('byebelly_date');
		echo $this->Form->input('itstarted');
		echo $this->Form->input('days');
		echo $this->Form->input('hours');
		echo $this->Form->input('iwas');
		echo $this->Form->input('experience');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Byebelly Pages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
