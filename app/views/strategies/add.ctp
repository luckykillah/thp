<div class="strategies form">
<?php echo $this->Form->create('Strategy');?>
	<fieldset>
		<legend><?php __('Add Strategy'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		echo $this->Form->input('goal_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Strategies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Goals', true), array('controller' => 'goals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goal', true), array('controller' => 'goals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Updates', true), array('controller' => 'updates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Update', true), array('controller' => 'updates', 'action' => 'add')); ?> </li>
	</ul>
</div>