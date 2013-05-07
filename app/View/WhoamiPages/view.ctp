<div class="whoamiPages view">
<h2><?php  echo __('Whoami Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($whoamiPage['WhoamiPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($whoamiPage['WhoamiPage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($whoamiPage['WhoamiPage']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesion'); ?></dt>
		<dd>
			<?php echo h($whoamiPage['WhoamiPage']['profesion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($whoamiPage['WhoamiPage']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dadsname'); ?></dt>
		<dd>
			<?php echo h($whoamiPage['WhoamiPage']['dadsname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($whoamiPage['WhoamiPage']['photo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Whoami Page'), array('action' => 'edit', $whoamiPage['WhoamiPage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Whoami Page'), array('action' => 'delete', $whoamiPage['WhoamiPage']['id']), null, __('Are you sure you want to delete # %s?', $whoamiPage['WhoamiPage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Whoami Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Whoami Page'), array('action' => 'add')); ?> </li>
	</ul>
</div>
