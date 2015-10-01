<div class="alocations view">
<h2><?php echo __('Alocation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alocation['Alocation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($alocation['Alocation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alocation['Group']['name'], array('controller' => 'groups', 'action' => 'view', $alocation['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alocation['User']['name'], array('controller' => 'users', 'action' => 'view', $alocation['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ocupation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alocation['Ocupation']['name'], array('controller' => 'ocupations', 'action' => 'view', $alocation['Ocupation']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alocation'), array('action' => 'edit', $alocation['Alocation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alocation'), array('action' => 'delete', $alocation['Alocation']['id']), array(), __('Are you sure you want to delete # %s?', $alocation['Alocation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alocations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alocation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ocupations'), array('controller' => 'ocupations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ocupation'), array('controller' => 'ocupations', 'action' => 'add')); ?> </li>
	</ul>
</div>
