<div class="gettingclosePages form">
<?php echo $this->Form->create('GettingclosePage'); ?>
	<fieldset>
		<legend><?php echo __('Add Gettingclose Page'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('named');
		echo $this->Form->input('possiblename1');
		echo $this->Form->input('possiblename2');
		echo $this->Form->input('possiblename3');
		echo $this->Form->input('possiblename4');
		echo $this->Form->input('possiblename5');
		echo $this->Form->input('favoritename');
		echo $this->Form->input('suggestedname1');
		echo $this->Form->input('suggestedname2');
		echo $this->Form->input('suggestedname3');
		echo $this->Form->input('suggestedname4');
		echo $this->Form->input('suggestedname5');
		echo $this->Form->input('inlaw');
		echo $this->Form->input('parents');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Gettingclose Pages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
