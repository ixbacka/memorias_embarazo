<div class="childsexPages form">
<?php echo $this->Form->create('ChildsexPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Childsex Page'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('theythink');
		echo $this->Form->input('ithink');
		echo $this->Form->input('decided');
		echo $this->Form->input('whyidecided');
		echo $this->Form->input('nickname');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Childsex Pages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
