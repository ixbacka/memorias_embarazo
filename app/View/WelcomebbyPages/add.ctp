<div class="welcomebbyPages form">
<?php echo $this->Form->create('WelcomebbyPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Welcomebby Page'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('ulooklike');
		echo $this->Form->input('whocutit');
		echo $this->Form->input('ifelt');
		echo $this->Form->input('wheniholdu');
		echo $this->Form->input('metu');
		echo $this->Form->input('tilday');
		echo $this->Form->input('nighttime');
		echo $this->Form->input('most');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Welcomebby Pages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
