<div class="babyshowerPages form">
<?php echo $this->Form->create('BabyshowerPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Babyshower Page'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('bbyshower_date');
		echo $this->Form->input('present1');
		echo $this->Form->input('present2');
		echo $this->Form->input('present3');
		echo $this->Form->input('favoritepresent');
		echo $this->Form->input('guest1');
		echo $this->Form->input('guest2');
		echo $this->Form->input('guest3');
		echo $this->Form->input('photo1');
		echo $this->Form->input('photo2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Babyshower Pages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
