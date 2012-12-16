<div class="updatesTags form">
<?php echo $this->Form->create('UpdatesTag');?>
	<fieldset>
		<legend><?php __('Add Updates Tag'); ?></legend>
	<?php
		echo $this->Form->input('id_updates');
		echo $this->Form->input('id_tags');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Updates Tags', true), array('action' => 'index'));?></li>
	</ul>
</div>