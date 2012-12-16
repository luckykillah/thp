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