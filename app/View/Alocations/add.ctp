<div class="alocations form">
<?php echo $this->Form->create('Alocation'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Alocação'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('cargo');
		echo $this->Form->input('membro');
		echo $this->Form->input('tarefa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acções'); ?></h3>
	<ul>

		<?php echo $this->Html->link(__('Listar Alocações'), array('action' => 'index'),array('class'=>'btn btn-default')); ?><br>
		<?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'groups', 'action' => 'index'),array('class'=>'btn btn-default')); ?> <br>
		<?php echo $this->Html->link(__('Listar Tarefas'), array('controller' => 'ocupations', 'action' => 'index'),array('class'=>'btn btn-default')); ?> <br>
        <?php echo $this->Html->link(__('Listar Membros'), array('controller' => 'users', 'action' => 'index'),array('class'=>'btn btn-default')); ?> <br>
		<?php //echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'btn btn-default')); ?> <br>
		<?php //echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add'),array('class'=>'btn btn-default')); ?> <br>
		<?php // echo $this->Html->link(__('New Ocupation'), array('controller' => 'ocupations', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
	</ul>
</div>
