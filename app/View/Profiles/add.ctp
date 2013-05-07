<div class="profiles form">
<?php echo $this->Form->create('Profile'); ?>
	<fieldset>
		<legend><?php echo __('Add Profile'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('name');
		echo $this->Form->input('lastname');
		echo $this->Form->input('location');
		echo $this->Form->input('birthday');
		echo $this->Form->input('cover_photo');
		echo $this->Form->input('font');
		echo $this->Form->input('theme');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?></li>
	</ul>
</div>
