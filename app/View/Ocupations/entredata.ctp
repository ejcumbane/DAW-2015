<?php
$this->Html->css('base', null, array('inline' => false));
?>
<div class="ocupations index">
	<h2><?php echo __('Lista de Tarefas'); ?></h2>
    <div class="filters">
		
		<?php $base_url = array('controller' => 'ocupations', 'action' => 'entredata');?>
	<?php	echo $this->Form->create("Filter",array('url' => $base_url, 'class' => 'filter'));?>
	
        
    <table>
    	<tr>
       		<th>
              <?php	echo $this->Form->input("search", array('label' => false, 'placeholder' => "Inserir data inicio."));?>

            	
            </th>
            <th>
            		<?php	echo $this->Form->input("search", array('label' => false, 'placeholder' => "Inserir data fim"));?>

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
			
			<th><?php echo $this->Paginator->sort('Nome da Tarefa'); ?></th>
			<th><?php echo $this->Paginator->sort('Descrição'); ?></th>
			<th><?php echo $this->Paginator->sort('Nome do Membro'); ?></th>
			<th><?php echo $this->Paginator->sort('Data de Início'); ?></th>
			<th><?php echo $this->Paginator->sort('Data Fim'); ?></th>
			<th class="actions"><?php echo __('Acções'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ocupations as $ocupation): ?>
	<tr>
		
		<td><?php echo h($ocupation['Ocupation']['name']); ?>&nbsp;</td>
		<td><?php echo h($ocupation['Ocupation']['descricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ocupation['User']['name'], array('controller' => 'users', 'action' => 'view', $ocupation['User']['id'])); ?>
		</td>
		<td><?php echo h($ocupation['Ocupation']['dataregisto']); ?>&nbsp;</td>
		<td><?php echo h($ocupation['Ocupation']['prazo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ocupation['Ocupation']['id']),array('class'=>'btn btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ocupation['Ocupation']['id']),array('class'=>'btn btn-primary')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ocupation['Ocupation']['id']),array('class'=>'btn btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $ocupation['Ocupation']['id']))); ?>
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
		<?php echo $this->Html->link(__('Nova Tarefa'), array('action' => 'add'),array('class'=>'btn btn-default')); ?><br>
		<?php echo $this->Html->link(__('Listar Membros'), array('controller' => 'users', 'action' => 'index'),array('class'=>'btn btn-default')); ?> <br>
		<?php echo $this->Html->link(__('Novo Membro'), array('controller' => 'users', 'action' => 'add'),array('class'=>'btn btn-default')); ?> <br>
		<?php echo $this->Html->link(__('Listar Alocações'), array('controller' => 'alocations', 'action' => 'index'),array('class'=>'btn btn-default')); ?> <br>
		<?php echo $this->Html->link(__('Nova Alocação'), array('controller' => 'alocations', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
	</ul>
</div>
