<div class="sintomPages view">
<h2><?php  echo __('Sintom Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matutinos'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['matutinos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Worst'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['worst']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Craving1'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['craving1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Craving2'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['craving2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Craving3'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['craving3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Craving4'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['craving4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Craving5'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['craving5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Craving6'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['craving6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weirdestcraving'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['weirdestcraving']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gross1'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['gross1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gross2'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['gross2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gross3'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['gross3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gross4'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['gross4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gross5'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['gross5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gross6'); ?></dt>
		<dd>
			<?php echo h($sintomPage['SintomPage']['gross6']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sintom Page'), array('action' => 'edit', $sintomPage['SintomPage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sintom Page'), array('action' => 'delete', $sintomPage['SintomPage']['id']), null, __('Are you sure you want to delete # %s?', $sintomPage['SintomPage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sintom Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sintom Page'), array('action' => 'add')); ?> </li>
	</ul>
</div>
