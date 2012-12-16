<div class="goals form">
<?php echo $this->Form->create('Goal');?>
	<fieldset>
		<legend><?php __('Edit Goal'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		echo $this->Form->input('status');
		echo $this->Form->input('Category');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Goal.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Goal.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Goals', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Strategies', true), array('controller' => 'strategies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy', true), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>