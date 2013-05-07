<div class="familytreePages form">
<?php echo $this->Form->create('FamilytreePage'); ?>
	<fieldset>
		<legend><?php echo __('Add Familytree Page'); ?></legend>
	<?php
		echo $this->Form->input('grandpa_dad');
		echo $this->Form->input('grandma_dad');
		echo $this->Form->input('grandpa_mom');
		echo $this->Form->input('grandma_mom');
		echo $this->Form->input('grandpa_dad_img');
		echo $this->Form->input('grandma_dad_img');
		echo $this->Form->input('grandpa_mom_img');
		echo $this->Form->input('grandma_mom_img');
		echo $this->Form->input('mom');
		echo $this->Form->input('dad');
		echo $this->Form->input('mom_img');
		echo $this->Form->input('dad_img');
		echo $this->Form->input('baby');
		echo $this->Form->input('baby_img');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Familytree Pages'), array('action' => 'index')); ?></li>
	</ul>
</div>
