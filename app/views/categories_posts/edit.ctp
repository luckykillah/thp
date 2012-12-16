<div class="categoriesPosts form">
<?php echo $this->Form->create('CategoriesPost');?>
	<fieldset>
		<legend><?php __('Edit Categories Post'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('post_id');
		echo $this->Form->input('category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CategoriesPost.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CategoriesPost.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories Posts', true), array('action' => 'index'));?></li>
	</ul>
</div>