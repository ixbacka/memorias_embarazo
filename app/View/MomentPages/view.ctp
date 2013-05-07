<div class="momentPages view">
<h2><?php  echo __('Moment Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($momentPage['MomentPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($momentPage['MomentPage']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtitle'); ?></dt>
		<dd>
			<?php echo h($momentPage['MomentPage']['subtitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($momentPage['MomentPage']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($momentPage['MomentPage']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Moment Page'), array('action' => 'edit', $momentPage['MomentPage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Moment Page'), array('action' => 'delete', $momentPage['MomentPage']['id']), null, __('Are you sure you want to delete # %s?', $momentPage['MomentPage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Moment Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Moment Page'), array('action' => 'add')); ?> </li>
	</ul>
</div>
