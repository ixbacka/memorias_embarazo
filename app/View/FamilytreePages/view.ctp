<div class="familytreePages view">
<h2><?php  echo __('Familytree Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandpa Dad'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['grandpa_dad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandma Dad'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['grandma_dad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandpa Mom'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['grandpa_mom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandma Mom'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['grandma_mom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandpa Dad Img'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['grandpa_dad_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandma Dad Img'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['grandma_dad_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandpa Mom Img'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['grandpa_mom_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandma Mom Img'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['grandma_mom_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mom'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['mom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dad'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['dad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mom Img'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['mom_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dad Img'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['dad_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Baby'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['baby']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Baby Img'); ?></dt>
		<dd>
			<?php echo h($familytreePage['FamilytreePage']['baby_img']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Familytree Page'), array('action' => 'edit', $familytreePage['FamilytreePage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Familytree Page'), array('action' => 'delete', $familytreePage['FamilytreePage']['id']), null, __('Are you sure you want to delete # %s?', $familytreePage['FamilytreePage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Familytree Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familytree Page'), array('action' => 'add')); ?> </li>
	</ul>
</div>
