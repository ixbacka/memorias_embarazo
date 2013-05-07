<div class="ultrasoundPages view">
<h2><?php  echo __('Ultrasound Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ultrasoundPage['UltrasoundPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Date'); ?></dt>
		<dd>
			<?php echo h($ultrasoundPage['UltrasoundPage']['first_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Week'); ?></dt>
		<dd>
			<?php echo h($ultrasoundPage['UltrasoundPage']['first_week']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Photo'); ?></dt>
		<dd>
			<?php echo h($ultrasoundPage['UltrasoundPage']['first_photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Notes'); ?></dt>
		<dd>
			<?php echo h($ultrasoundPage['UltrasoundPage']['first_notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Second Date'); ?></dt>
		<dd>
			<?php echo h($ultrasoundPage['UltrasoundPage']['second_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Second Week'); ?></dt>
		<dd>
			<?php echo h($ultrasoundPage['UltrasoundPage']['second_week']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Second Photo'); ?></dt>
		<dd>
			<?php echo h($ultrasoundPage['UltrasoundPage']['second_photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Second Notes'); ?></dt>
		<dd>
			<?php echo h($ultrasoundPage['UltrasoundPage']['second_notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ultrasound Page'), array('action' => 'edit', $ultrasoundPage['UltrasoundPage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ultrasound Page'), array('action' => 'delete', $ultrasoundPage['UltrasoundPage']['id']), null, __('Are you sure you want to delete # %s?', $ultrasoundPage['UltrasoundPage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ultrasound Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ultrasound Page'), array('action' => 'add')); ?> </li>
	</ul>
</div>
