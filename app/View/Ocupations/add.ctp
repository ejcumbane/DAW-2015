<div class="ocupations form">
<?php echo $this->Form->create('Ocupation'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Tarefa'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('descrição');
		echo $this->Form->input('nome do membro');
		echo $this->Form->input('dataregisto');
		echo $this->Form->input('prazo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acções'); ?></h3>
	<ul>

		<?php echo $this->Html->link(__('Listar Tarefas'), array('action' => 'index'),array('class'=>'btn btn-default')); ?><br>
		<?php echo $this->Html->link(__('Listar Membros'), array('controller' => 'users', 'action' => 'index'),array('class'=>'btn btn-default')); ?> <br>
		<?php echo $this->Html->link(__('Novo Membro'), array('controller' => 'users', 'action' => 'add'),array('class'=>'btn btn-default')); ?> <br>
		<?php echo $this->Html->link(__('Listar Alocações'), array('controller' => 'alocations', 'action' => 'index'),array('class'=>'btn btn-default')); ?> <br>
		<?php echo $this->Html->link(__('Nova Alocação'), array('controller' => 'alocations', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
	</ul>
</div>
