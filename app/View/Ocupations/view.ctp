<div class="ocupations view">
<h2><?php echo __('Ocupation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ocupation['Ocupation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($ocupation['Ocupation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($ocupation['Ocupation']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ocupation['User']['name'], array('controller' => 'users', 'action' => 'view', $ocupation['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dataregisto'); ?></dt>
		<dd>
			<?php echo h($ocupation['Ocupation']['dataregisto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prazo'); ?></dt>
		<dd>
			<?php echo h($ocupation['Ocupation']['prazo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ocupation'), array('action' => 'edit', $ocupation['Ocupation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ocupation'), array('action' => 'delete', $ocupation['Ocupation']['id']), array(), __('Are you sure you want to delete # %s?', $ocupation['Ocupation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ocupations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ocupation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alocations'), array('controller' => 'alocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alocation'), array('controller' => 'alocations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Alocations'); ?></h3>
	<?php if (!empty($ocupation['Alocation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Ocupation Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ocupation['Alocation'] as $alocation): ?>
		<tr>
			<td><?php echo $alocation['id']; ?></td>
			<td><?php echo $alocation['name']; ?></td>
			<td><?php echo $alocation['group_id']; ?></td>
			<td><?php echo $alocation['user_id']; ?></td>
			<td><?php echo $alocation['ocupation_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'alocations', 'action' => 'view', $alocation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'alocations', 'action' => 'edit', $alocation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'alocations', 'action' => 'delete', $alocation['id']), array(), __('Are you sure you want to delete # %s?', $alocation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alocation'), array('controller' => 'alocations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
