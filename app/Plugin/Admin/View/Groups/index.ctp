<div class="groups index">
	<h2><?php echo __('Cargos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('data de criação'); ?></th>
			<th><?php echo $this->Paginator->sort('data de modificação'); ?></th>
			<th class="actions"><?php echo __('Acções'); ?></th>
	</tr>
	<?php foreach ($groups as $group): ?>
	<tr>
		
		<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id']),array('class'=>'btn btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id']), array('class'=>'btn btn-primary')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
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
		<?php echo $this->Html->link(__('Novo Cargo'), array('action' => 'add'),array('class'=>'btn btn-default')); ?><br> 			        <?php echo $this->Html->link(__('Pesquisar Membro'), array('controller' => 'users', 'action' => 'membroscargo'),array('class'=>'btn btn-default')); ?> 

		<?php //echo $this->Html->link(__('Listar Membros'), array('controller' => 'users', 'action' => 'index'),array('class'=>'btn btn-default')); ?> <br>
		<?php //echo $this->Html->link(__('Novo Membro'), array('controller' => 'users', 'action' => 'add'),array('class'=>'btn btn-default')); ?><br> 
       
	</ul>
</div>
