<div class="animoPages view">
<h2><?php  echo __('Animo Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month1 Humor'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['month1_humor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month2 Humor'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['month2_humor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month3 Humor'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['month3_humor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month1 Energy'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['month1_energy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month2 Energy'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['month2_energy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month3 Energy'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['month3_energy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month1 Physical'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['month1_physical']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month2 Physical'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['month2_physical']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month3 Physical'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['month3_physical']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month1 Other'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['month1_other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month2 Other'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['month2_other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month3 Other'); ?></dt>
		<dd>
			<?php echo h($animoPage['AnimoPage']['month3_other']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Animo Page'), array('action' => 'edit', $animoPage['AnimoPage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Animo Page'), array('action' => 'delete', $animoPage['AnimoPage']['id']), null, __('Are you sure you want to delete # %s?', $animoPage['AnimoPage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Animo Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Animo Page'), array('action' => 'add')); ?> </li>
	</ul>
</div>
