<div class="categoriesPosts view">
<h2><?php  __('Categories Post');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $categoriesPost['CategoriesPost']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $categoriesPost['CategoriesPost']['post_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $categoriesPost['CategoriesPost']['category_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categories Post', true), array('action' => 'edit', $categoriesPost['CategoriesPost']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Categories Post', true), array('action' => 'delete', $categoriesPost['CategoriesPost']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $categoriesPost['CategoriesPost']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories Posts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categories Post', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
