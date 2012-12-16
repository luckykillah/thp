<div class="updatesTags form">
<?php echo $this->Form->create('UpdatesTag');?>
	<fieldset>
		<legend><?php __('Edit Updates Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_updates');
		echo $this->Form->input('id_tags');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('UpdatesTag.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('UpdatesTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Updates Tags', true), array('action' => 'index'));?></li>
	</ul>
</div>