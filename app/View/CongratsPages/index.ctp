<div class="congratsPages index">
	<h2><?php echo __('Congrats Pages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sospeche'); ?></th>
			<th><?php echo $this->Paginator->sort('prueba'); ?></th>
			<th><?php echo $this->Paginator->sort('firstfeeling'); ?></th>
			<th><?php echo $this->Paginator->sort('babycoming'); ?></th>
			<th><?php echo $this->Paginator->sort('howishare'); ?></th>
			<th><?php echo $this->Paginator->sort('babynum'); ?></th>
			<th><?php echo $this->Paginator->sort('babybros'); ?></th>
			<th><?php echo $this->Paginator->sort('details'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($congratsPages as $congratsPage): ?>
	<tr>
		<td><?php echo h($congratsPage['CongratsPage']['id']); ?>&nbsp;</td>
		<td><?php echo h($congratsPage['CongratsPage']['sospeche']); ?>&nbsp;</td>
		<td><?php echo h($congratsPage['CongratsPage']['prueba']); ?>&nbsp;</td>
		<td><?php echo h($congratsPage['CongratsPage']['firstfeeling']); ?>&nbsp;</td>
		<td><?php echo h($congratsPage['CongratsPage']['babycoming']); ?>&nbsp;</td>
		<td><?php echo h($congratsPage['CongratsPage']['howishare']); ?>&nbsp;</td>
		<td><?php echo h($congratsPage['CongratsPage']['babynum']); ?>&nbsp;</td>
		<td><?php echo h($congratsPage['CongratsPage']['babybros']); ?>&nbsp;</td>
		<td><?php echo h($congratsPage['CongratsPage']['details']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $congratsPage['CongratsPage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $congratsPage['CongratsPage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $congratsPage['CongratsPage']['id']), null, __('Are you sure you want to delete # %s?', $congratsPage['CongratsPage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Congrats Page'), array('action' => 'add')); ?></li>
	</ul>
</div>
