<div class="cargos form">
<?php echo $this->Form->create('Cargo'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Cargo'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('ocupation_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acções'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Cargos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tarefas'), array('controller' => 'ocupations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Tarefa'), array('controller' => 'ocupations', 'action' => 'add')); ?> </li>
	</ul>
</div>
