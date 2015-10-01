<div class="users index">
	<h2><?php echo __('Lista de Membros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		
			<th><?php echo $this->Paginator->sort('Nome do Membro'); ?></th>
			<th><?php echo $this->Paginator->sort('Username'); ?></th>
		
			<th><?php echo $this->Paginator->sort('Cargo ou Posição'); ?></th>
			<th><?php echo $this->Paginator->sort('Data de cadastro'); ?></th>
			<th><?php echo $this->Paginator->sort('Data da modifcação'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
	
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	</p>
	<div class="paging">
	
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acções'); ?></h3>
	<ul>
		<?php echo $this->Html->link(__('Novo Membro'), array('action' => 'add')); ?><br>
		<?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'groups', 'action' => 'index')); ?> <br>
		<?php echo $this->Html->link(__('Novo Cargo'), array('controller' => 'groups', 'action' => 'add')); ?> <br>
		<?php echo $this->Html->link(__('Listar Tarefas'), array('controller' => 'ocupations', 'action' => 'index')); ?><br> 
		<?php echo $this->Html->link(__('Nova Tarefa'), array('controller' => 'ocupations', 'action' => 'add')); ?> 
	</ul>
</div>
