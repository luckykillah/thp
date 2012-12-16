<div class="categoriesGoals view">
<h2><?php  __('Categories Goal');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $categoriesGoal['CategoriesGoal']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goal Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $categoriesGoal['CategoriesGoal']['goal_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $categoriesGoal['CategoriesGoal']['category_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categories Goal', true), array('action' => 'edit', $categoriesGoal['CategoriesGoal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Categories Goal', true), array('action' => 'delete', $categoriesGoal['CategoriesGoal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $categoriesGoal['CategoriesGoal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories Goals', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categories Goal', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
