<div class="groups form">
<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Grupo'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acções'); ?></h3>
	<ul>

		<?php echo $this->Html->link(__('Listar Cargos'), array('action' => 'index')); ?><br>
		<?php echo $this->Html->link(__('Listar Membro'), array('controller' => 'users', 'action' => 'index')); ?> <br>
		<?php echo $this->Html->link(__('Novo membro'), array('controller' => 'users', 'action' => 'add')); ?> 
	</ul>
</div>
