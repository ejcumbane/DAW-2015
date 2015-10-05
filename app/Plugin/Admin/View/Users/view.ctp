<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ocupations'), array('controller' => 'ocupations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ocupation'), array('controller' => 'ocupations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ocupations'); ?></h3>
	<?php if (!empty($user['Ocupation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Descrição'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Dataregisto'); ?></th>
		<th><?php echo __('Prazo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Ocupation'] as $ocupation): ?>
		<tr>
			<td><?php echo $ocupation['id']; ?></td>
			<td><?php echo $ocupation['name']; ?></td>
			<td><?php echo $ocupation['descrição']; ?></td>
			<td><?php echo $ocupation['user_id']; ?></td>
			<td><?php echo $ocupation['dataregisto']; ?></td>
			<td><?php echo $ocupation['prazo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ocupations', 'action' => 'view', $ocupation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ocupations', 'action' => 'edit', $ocupation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ocupations', 'action' => 'delete', $ocupation['id']), array(), __('Are you sure you want to delete # %s?', $ocupation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ocupation'), array('controller' => 'ocupations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
