<div class="bellyPages view">
<h2><?php  echo __('Belly Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bellyPage['BellyPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo1'); ?></dt>
		<dd>
			<?php echo h($bellyPage['BellyPage']['photo1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo2'); ?></dt>
		<dd>
			<?php echo h($bellyPage['BellyPage']['photo2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo3'); ?></dt>
		<dd>
			<?php echo h($bellyPage['BellyPage']['photo3']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Belly Page'), array('action' => 'edit', $bellyPage['BellyPage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Belly Page'), array('action' => 'delete', $bellyPage['BellyPage']['id']), null, __('Are you sure you want to delete # %s?', $bellyPage['BellyPage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Belly Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Belly Page'), array('action' => 'add')); ?> </li>
	</ul>
</div>
