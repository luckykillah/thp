<div class="categoriesPosts form">
<?php echo $this->Form->create('CategoriesPost');?>
	<fieldset>
		<legend><?php __('Add Categories Post'); ?></legend>
	<?php
		echo $this->Form->input('post_id');
		echo $this->Form->input('category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories Posts', true), array('action' => 'index'));?></li>
	</ul>
</div>