<div class="updates form">
<?php echo $this->Form->create('Update');?>
	<fieldset>
		<legend><?php __('Edit Update'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		echo $this->Form->input('strategy_id');
		echo $this->Form->input('Tag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Update.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Update.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Updates', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Strategies', true), array('controller' => 'strategies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy', true), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>