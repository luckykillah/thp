<div class="tags form">
<?php echo $this->Form->create('Tag');?>
	<fieldset>
		<legend><?php __('Edit Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('Post');
		echo $this->Form->input('Update');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>