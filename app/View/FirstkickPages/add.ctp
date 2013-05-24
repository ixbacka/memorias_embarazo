<div class="firstkickPages form">
<?php echo $this->Form->create('FirstkickPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Firstkick Page'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('firstkick_date');
		echo $this->Form->input('week');
		echo $this->Form->input('bigquestion');
		echo $this->Form->input('ifeel');
		echo $this->Form->input('craving1');
		echo $this->Form->input('craving2');
		echo $this->Form->input('craving3');
		echo $this->Form->input('craving4');
		echo $this->Form->input('gross1');
		echo $this->Form->input('gross2');
		echo $this->Form->input('gross3');
		echo $this->Form->input('gross4');
		echo $this->Form->input('photo');
		echo $this->Form->input('photo_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Firstkick Pages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
