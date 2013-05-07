<div class="sintomPages index">
	<h2><?php echo __('Sintom Pages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('matutinos'); ?></th>
			<th><?php echo $this->Paginator->sort('worst'); ?></th>
			<th><?php echo $this->Paginator->sort('craving1'); ?></th>
			<th><?php echo $this->Paginator->sort('craving2'); ?></th>
			<th><?php echo $this->Paginator->sort('craving3'); ?></th>
			<th><?php echo $this->Paginator->sort('craving4'); ?></th>
			<th><?php echo $this->Paginator->sort('craving5'); ?></th>
			<th><?php echo $this->Paginator->sort('craving6'); ?></th>
			<th><?php echo $this->Paginator->sort('weirdestcraving'); ?></th>
			<th><?php echo $this->Paginator->sort('gross1'); ?></th>
			<th><?php echo $this->Paginator->sort('gross2'); ?></th>
			<th><?php echo $this->Paginator->sort('gross3'); ?></th>
			<th><?php echo $this->Paginator->sort('gross4'); ?></th>
			<th><?php echo $this->Paginator->sort('gross5'); ?></th>
			<th><?php echo $this->Paginator->sort('gross6'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sintomPages as $sintomPage): ?>
	<tr>
		<td><?php echo h($sintomPage['SintomPage']['id']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['matutinos']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['worst']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['craving1']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['craving2']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['craving3']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['craving4']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['craving5']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['craving6']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['weirdestcraving']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['gross1']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['gross2']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['gross3']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['gross4']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['gross5']); ?>&nbsp;</td>
		<td><?php echo h($sintomPage['SintomPage']['gross6']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sintomPage['SintomPage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sintomPage['SintomPage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sintomPage['SintomPage']['id']), null, __('Are you sure you want to delete # %s?', $sintomPage['SintomPage']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sintom Page'), array('action' => 'add')); ?></li>
	</ul>
</div>
