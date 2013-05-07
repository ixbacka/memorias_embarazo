<div class="congratsPages form">
<?php echo $this->Form->create('CongratsPage'); ?>
	<fieldset>
		<legend><?php echo __('Add Congrats Page'); ?></legend>
	<?php
		echo $this->Form->input('sospeche');
		echo $this->Form->input('prueba');
		echo $this->Form->input('firstfeeling');
		echo $this->Form->input('babycoming');
		echo $this->Form->input('howishare');
		echo $this->Form->input('babynum');
		echo $this->Form->input('babybros');
		echo $this->Form->input('details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Congrats Pages'), array('action' => 'index')); ?></li>
	</ul>
</div>
