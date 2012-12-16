<div class="categoriesGoals form">
<?php echo $this->Form->create('CategoriesGoal');?>
	<fieldset>
		<legend><?php __('Edit Categories Goal'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('goal_id');
		echo $this->Form->input('category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CategoriesGoal.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CategoriesGoal.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories Goals', true), array('action' => 'index'));?></li>
	</ul>
</div>