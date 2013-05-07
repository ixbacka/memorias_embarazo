<div class="profiles view">
<h2><?php  echo __('Profile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cover Photo'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['cover_photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Font'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['font']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Theme'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['theme']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Profile'), array('action' => 'edit', $profile['Profile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profile'), array('action' => 'delete', $profile['Profile']['id']), null, __('Are you sure you want to delete # %s?', $profile['Profile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('action' => 'add')); ?> </li>
	</ul>
</div>
