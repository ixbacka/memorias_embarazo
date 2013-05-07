<div class="whoamiPages form">
<?php echo $this->Form->create('WhoamiPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Whoami Page'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('age');
		echo $this->Form->input('profesion');
		echo $this->Form->input('location');
		echo $this->Form->input('dadsname');
		echo $this->Form->input('photo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Whoami Pages'), array('action' => 'index')); ?></li>
	</ul>
</div>
