<div class="cargos index">
	<h2><?php echo __('Cargos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('ocupation_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cargos as $cargo): ?>
	<tr>
		<td><?php echo h($cargo['Cargo']['id']); ?>&nbsp;</td>
		<td><?php echo h($cargo['Cargo']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cargo['Ocupation']['name'], array('controller' => 'ocupations', 'action' => 'view', $cargo['Ocupation']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cargo['Cargo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cargo['Cargo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cargo['Cargo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cargo['Cargo']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Adicionar Cargo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tarefas'), array('controller' => 'ocupations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Tarefa'), array('controller' => 'ocupations', 'action' => 'add')); ?> </li>
	</ul>
</div>
