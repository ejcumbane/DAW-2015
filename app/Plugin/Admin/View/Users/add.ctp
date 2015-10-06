<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Membro'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('nome do membro');
		echo $this->Form->input('senha');
		echo $this->Form->input('cargo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acções'); ?></h3>
	<ul>

		<?php echo $this->Html->link(__('Listar Membros'), array('action' => 'index'),array('class'=>'btn btn-default')); ?><br>
		<?php echo $this->Html->link(__('Listar Grupos'), array('controller' => 'groups', 'action' => 'index'),array('class'=>'btn btn-default')); ?> <br>
		<?php echo $this->Html->link(__('Novo Grupo'), array('controller' => 'groups', 'action' => 'add'),array('class'=>'btn btn-default')); ?> <br>
		<?php echo $this->Html->link(__('Listar Tarefas'), array('controller' => 'ocupations', 'action' => 'index'),array('class'=>'btn btn-default')); ?><br>
		<?php echo $this->Html->link(__('Nova Tarefa'), array('controller' => 'ocupations', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
	</ul>
</div>
