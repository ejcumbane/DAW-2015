<div class="alocations index">
	<h2><?php echo __('Alocações'); ?></h2>
    <div class="filters">
		<h3>Filters</h3>
		<?php
		// The base url is the url where we'll pass the filter parameters
		$base_url = array('controller' => 'alocations', 'action' => 'index');
		echo $this->Form->create("Filter",array('url' => $base_url, 'class' => 'filter'));
		// add a select input for each filter. It's a good idea to add a empty value and set
		// the default option to that.
		echo $this->Form->input("group_id", array('label' => 'Membros', 'options' => $groups, 'empty' => '-- Todos os Membros --', 'default' => ''));
		//echo $this->Form->input("director_id", array('label' => 'Director', 'options' => $directors, 'empty' => '-- All directors --', 'default' => ''));
		// Add a basic search 
		echo $this->Form->input("search", array('label' => 'Search', 'placeholder' => "Search..."));

		echo $this->Form->submit("Validar");

		// To reset all the filters we only need to redirect to the base_url
		echo "<div class='submit actions'>";
		echo $this->Html->link("Reset",$base_url);
		echo "</div>";
		echo $this->Form->end();
		?>
	</div>
    
    
    
    
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ocupation_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($alocations as $alocation): ?>
	<tr>
		<td><?php echo h($alocation['Alocation']['id']); ?>&nbsp;</td>
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
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alocation['Alocation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alocation['Alocation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alocation['Alocation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $alocation['Alocation']['id']))); ?>
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
		<?php echo $this->Html->link(__('Nova Alocação'), array('action' => 'add')); ?><br>
		<?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'groups', 'action' => 'index')); ?> <br>
		<?php echo $this->Html->link(__('Novo Cargo'), array('controller' => 'groups', 'action' => 'add')); ?> <br>
		<?php echo $this->Html->link(__('Listar Membros'), array('controller' => 'users', 'action' => 'index')); ?> <br>
		<?php echo $this->Html->link(__('Novo Membro'), array('controller' => 'users', 'action' => 'add')); ?> <br>
		<?php echo $this->Html->link(__('Listar Tarefas'), array('controller' => 'ocupations', 'action' => 'index')); ?><br>
		<?php echo $this->Html->link(__('Nova Tarefa'), array('controller' => 'ocupations', 'action' => 'add')); ?> 
	</ul>
</div>
