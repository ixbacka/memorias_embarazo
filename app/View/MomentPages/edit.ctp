<div class="momentPages form">
<?php echo $this->Form->create('MomentPage'); ?>
	<fieldset>
		<legend><?php echo __('Edit Moment Page'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('subtitle');
		echo $this->Form->input('photo');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MomentPage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MomentPage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Moment Pages'), array('action' => 'index')); ?></li>
	</ul>
</div>
