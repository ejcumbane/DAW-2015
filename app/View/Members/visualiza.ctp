



<div class="members visualiza">
<h2><?php echo __('Membro'); ?></h2>\
<?php echo $this->Form->create('Member', array("action"=>"visualiza")); ?>
	<div class="form-group">
  				<div class="col-xs-2">
        		<label for="ex1"> id</label>
        		<?php echo $this->Form->input('d');?>
		               
      			</div>
             </div>
		</div>
        
<?php echo $this->Form->end(__('Submit')); ?>
	<dl>
    	
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($member['Member']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($member['Member']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($member['Member']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>


<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['id']), array(), __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?> </li>
	</ul>
</div>-->
