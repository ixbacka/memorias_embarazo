<div class="ultrasoundPages index">
	<h2><?php echo __('Ultrasound Pages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_date'); ?></th>
			<th><?php echo $this->Paginator->sort('first_week'); ?></th>
			<th><?php echo $this->Paginator->sort('first_photo'); ?></th>
			<th><?php echo $this->Paginator->sort('first_notes'); ?></th>
			<th><?php echo $this->Paginator->sort('second_date'); ?></th>
			<th><?php echo $this->Paginator->sort('second_week'); ?></th>
			<th><?php echo $this->Paginator->sort('second_photo'); ?></th>
			<th><?php echo $this->Paginator->sort('second_notes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ultrasoundPages as $ultrasoundPage): ?>
	<tr>
		<td><?php echo h($ultrasoundPage['UltrasoundPage']['id']); ?>&nbsp;</td>
		<td><?php echo h($ultrasoundPage['UltrasoundPage']['first_date']); ?>&nbsp;</td>
		<td><?php echo h($ultrasoundPage['UltrasoundPage']['first_week']); ?>&nbsp;</td>
		<td><?php echo h($ultrasoundPage['UltrasoundPage']['first_photo']); ?>&nbsp;</td>
		<td><?php echo h($ultrasoundPage['UltrasoundPage']['first_notes']); ?>&nbsp;</td>
		<td><?php echo h($ultrasoundPage['UltrasoundPage']['second_date']); ?>&nbsp;</td>
		<td><?php echo h($ultrasoundPage['UltrasoundPage']['second_week']); ?>&nbsp;</td>
		<td><?php echo h($ultrasoundPage['UltrasoundPage']['second_photo']); ?>&nbsp;</td>
		<td><?php echo h($ultrasoundPage['UltrasoundPage']['second_notes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ultrasoundPage['UltrasoundPage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ultrasoundPage['UltrasoundPage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ultrasoundPage['UltrasoundPage']['id']), null, __('Are you sure you want to delete # %s?', $ultrasoundPage['UltrasoundPage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ultrasound Page'), array('action' => 'add')); ?></li>
	</ul>
</div>
