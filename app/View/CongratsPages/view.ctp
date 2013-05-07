<div class="congratsPages view">
<h2><?php  echo __('Congrats Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($congratsPage['CongratsPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sospeche'); ?></dt>
		<dd>
			<?php echo h($congratsPage['CongratsPage']['sospeche']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prueba'); ?></dt>
		<dd>
			<?php echo h($congratsPage['CongratsPage']['prueba']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstfeeling'); ?></dt>
		<dd>
			<?php echo h($congratsPage['CongratsPage']['firstfeeling']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Babycoming'); ?></dt>
		<dd>
			<?php echo h($congratsPage['CongratsPage']['babycoming']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Howishare'); ?></dt>
		<dd>
			<?php echo h($congratsPage['CongratsPage']['howishare']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Babynum'); ?></dt>
		<dd>
			<?php echo h($congratsPage['CongratsPage']['babynum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Babybros'); ?></dt>
		<dd>
			<?php echo h($congratsPage['CongratsPage']['babybros']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($congratsPage['CongratsPage']['details']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Congrats Page'), array('action' => 'edit', $congratsPage['CongratsPage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Congrats Page'), array('action' => 'delete', $congratsPage['CongratsPage']['id']), null, __('Are you sure you want to delete # %s?', $congratsPage['CongratsPage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Congrats Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Congrats Page'), array('action' => 'add')); ?> </li>
	</ul>
</div>
