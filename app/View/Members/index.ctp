<div class="members index">
	<h2><?php echo __('Membros'); ?></h2>
    
    
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
    
	</thead>
	<tbody>
	<?php foreach ($members as $member): ?>
	<tr>
		<td><?php echo h($member['Member']['id']); ?>&nbsp;</td>
		<td><?php echo ($member['Member']['name']); ?>&nbsp;</td>
		<td><?php echo ($member['Member']['username']); ?>&nbsp;</td>
		<td><?php echo ($member['Member']['password']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $member['Member']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
		</p>
	
</div>
<div class="actions">
	<h3><?php echo __('Acções'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Adicionar Membro'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Alocações'), array('controller' => 'alocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Alocação'), array('controller' => 'alocations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tarefas'), array('controller' => 'ocupations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Tarefas'), array('controller' => 'ocupations', 'action' => 'add')); ?> </li>
	</ul>
</div>
