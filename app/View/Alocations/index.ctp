<div class="alocations index">
	<h2><?php echo __('Alocações'); ?></h2>
    
    <div class="filters">
		<?php $base_url = array('controller' => 'alocations', 'action' => 'index');?>
	<?php	echo $this->Form->create("Filter",array('url' => $base_url, 'class' => 'filter'));?>
	
        
    <table>
    	<tr>
       		<th>
            	<?php	echo $this->Form->input("group_id", array('label' => false, 'options' => $groups, 'empty' => '-- Selecionar o cargo --', 'default' => ''));?>
            </th>
            <th>
            		<?php	echo $this->Form->input("search", array('label' => false, 'placeholder' => "Search..."));?>

            </th>
            <th>
            <?php	echo $this->Form->submit("Buscar", array('class'=>'buscar'));?>
            </th>
            <th>
            	<?php	echo $this->Html->link("Limpar",$base_url);?>
            </th>
       </tr>
    </table>
    <?php	echo $this->Form->end(); ?>
   
		
	</div>
    
    
    
    
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('nome do membro'); ?></th>
			<th><?php echo $this->Paginator->sort('tarefa'); ?></th>
			<th class="actions"><?php echo __('Acções'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($alocations as $alocation): ?>
	<tr>
		
		<td><?php echo h($alocation['Alocation']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alocation['Group']['name'], array('controller' => 'groups', 'action' => 'view', $alocation['Group']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($alocation['User']['name'], array('controller' => 'users', 'action' => 'view', $alocation['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($alocation['Ocupation']['name'], array('controller' => 'ocupations', 'action' => 'view', $alocation['Ocupation']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alocation['Alocation']['id']),array('class'=>'btn btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alocation['Alocation']['id']), array('class'=>'btn btn-primary')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alocation['Alocation']['id']),array('class'=>'btn btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $alocation['Alocation']['id']))); ?>
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
		<?php echo $this->Html->link(__('Nova Alocação'), array('action' => 'add'),array('class'=>'btn btn-default')); ?><br>
		<?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'groups', 'action' => 'index'),array('class'=>'btn btn-default')); ?> <br>
        <?php echo $this->Html->link(__('Listar Membros'), array('controller' => 'users', 'action' => 'index'),array('class'=>'btn btn-default')); ?> <br>
		<?php echo $this->Html->link(__('Listar Tarefas'), array('controller' => 'ocupations', 'action' => 'index'),array('class'=>'btn btn-default')); ?><br>
		<?php echo $this->Html->link(__('Buscar Entre Datas'), array('controller' => 'ocupations', 'action' => 'entredata'),array('class'=>'btn btn-default')); ?>

		<?php //echo $this->Html->link(__('Novo Cargo'), array('controller' => 'groups', 'action' => 'add'),array('class'=>'btn btn-default')); ?> <br>
		<?php //echo $this->Html->link(__('Novo Membro'), array('controller' => 'users', 'action' => 'add'),array('class'=>'btn btn-default')); ?> <br>
		
		<?php //echo $this->Html->link(__('Nova Tarefa'), array('controller' => 'ocupations', 'action' => 'add'),array('class'=>'btn btn-default')); ?> <br>
        
	</ul>
</div>
