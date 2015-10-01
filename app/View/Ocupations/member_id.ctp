<div class="ocupations form">
<?php echo $this->Form->create('Ocupation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ocupation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('designacao');
		//echo $this->Form->input('descricao');
		echo $this->Form->input('prazo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acções'); ?></h3>
	<ul>


		<li><?php echo $this->Html->link(__('Listar Ocupations'), array('action' => 'index')); ?></li>
	</ul>
</div>
