<div class="categoriesGoals form">
<?php echo $this->Form->create('CategoriesGoal');?>
	<fieldset>
		<legend><?php __('Add Categories Goal'); ?></legend>
	<?php
		echo $this->Form->input('goal_id');
		echo $this->Form->input('category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories Goals', true), array('action' => 'index'));?></li>
	</ul>
</div>