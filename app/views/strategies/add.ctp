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
