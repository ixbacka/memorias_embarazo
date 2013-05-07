<div class="familytreePages index">
	<h2><?php echo __('Familytree Pages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('grandpa_dad'); ?></th>
			<th><?php echo $this->Paginator->sort('grandma_dad'); ?></th>
			<th><?php echo $this->Paginator->sort('grandpa_mom'); ?></th>
			<th><?php echo $this->Paginator->sort('grandma_mom'); ?></th>
			<th><?php echo $this->Paginator->sort('grandpa_dad_img'); ?></th>
			<th><?php echo $this->Paginator->sort('grandma_dad_img'); ?></th>
			<th><?php echo $this->Paginator->sort('grandpa_mom_img'); ?></th>
			<th><?php echo $this->Paginator->sort('grandma_mom_img'); ?></th>
			<th><?php echo $this->Paginator->sort('mom'); ?></th>
			<th><?php echo $this->Paginator->sort('dad'); ?></th>
			<th><?php echo $this->Paginator->sort('mom_img'); ?></th>
			<th><?php echo $this->Paginator->sort('dad_img'); ?></th>
			<th><?php echo $this->Paginator->sort('baby'); ?></th>
			<th><?php echo $this->Paginator->sort('baby_img'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($familytreePages as $familytreePage): ?>
	<tr>
		<td><?php echo h($familytreePage['FamilytreePage']['id']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['grandpa_dad']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['grandma_dad']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['grandpa_mom']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['grandma_mom']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['grandpa_dad_img']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['grandma_dad_img']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['grandpa_mom_img']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['grandma_mom_img']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['mom']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['dad']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['mom_img']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['dad_img']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['baby']); ?>&nbsp;</td>
		<td><?php echo h($familytreePage['FamilytreePage']['baby_img']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $familytreePage['FamilytreePage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $familytreePage['FamilytreePage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $familytreePage['FamilytreePage']['id']), null, __('Are you sure you want to delete # %s?', $familytreePage['FamilytreePage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Familytree Page'), array('action' => 'add')); ?></li>
	</ul>
</div>
