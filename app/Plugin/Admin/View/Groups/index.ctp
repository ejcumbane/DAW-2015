<div class="groups index">
	<h2><?php echo __('Cargos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($groups as $group): ?>
	<tr>
		
		<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
		</p>
	<div class="paging">
	
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acções'); ?></h3>
	<ul>
		<?php echo $this->Html->link(__('Novo Cargo'), array('action' => 'add')); ?><br>
		<?php echo $this->Html->link(__('Listar Membros'), array('controller' => 'users', 'action' => 'index')); ?> <br>
		<?php echo $this->Html->link(__('Novo Membro'), array('controller' => 'users', 'action' => 'add')); ?><br> 
        <?php echo $this->Html->link(__('Pesquisar Membro'), array('controller' => 'users', 'action' => 'membroscargo')); ?> 

	</ul>
</div>
