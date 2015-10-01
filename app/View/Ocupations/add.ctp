<div class="ocupations form">
<?php echo $this->Form->create('Ocupation'); ?>
	<fieldset>
		<legend><?php echo __('Add Ocupation'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('descricao');
		echo $this->Form->input('user_id');
		echo $this->Form->input('dataregisto');
		echo $this->Form->input('prazo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ocupations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alocations'), array('controller' => 'alocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alocation'), array('controller' => 'alocations', 'action' => 'add')); ?> </li>
	</ul>
</div>
