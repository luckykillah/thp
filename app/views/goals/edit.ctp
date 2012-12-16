<div class="goals form">
<?php echo $this->Form->create('Goal');?>
	<fieldset>
		<legend><?php __('Edit Goal'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		echo $this->Form->input('status', array('type' => 'checkbox', 'label' => 'Is this goal active?'));
		echo $this->Form->input('Category');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>