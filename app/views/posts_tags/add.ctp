<div class="postsTags form">
<?php echo $this->Form->create('PostsTag');?>
	<fieldset>
		<legend><?php __('Add Posts Tag'); ?></legend>
	<?php
		echo $this->Form->input('id_posts');
		echo $this->Form->input('id_tags');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts Tags', true), array('action' => 'index'));?></li>
	</ul>
</div>