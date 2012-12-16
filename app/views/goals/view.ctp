<div class="goals view">

	<h2>Goal: <?= $goal['Goal']['title']; ?> (<?php 
			if($goal['Goal']['status'] == 1){ echo 'Active'; } else{ echo 'Inactive'; }?>)</h2>
	<?= $goal['Goal']['body']; ?>

</div>

<?php if (!empty($goal['Strategy'])):?>
<div class="related">
	Strategies: 
	<?php foreach ($goal['Strategy'] as $strategy): ?>
		<?php echo $this->Html->link(__($strategy['title'], true), array('controller' => 'strategies', 'action' => 'view', $strategy['id'])) ?>
	<?php endforeach; ?>
</div>
<?php endif; ?>

<?php if (!empty($goal['Category'])):?>
<div class="meta">
	Catgories:
	<?foreach ($goal['Category'] as $category): ?>
		<?= $this->Html->link(__($category['title'], true), array('controller' => 'categories', 'action' => 'view', $category['id'])); ?>
	<?php endforeach; ?>
</div>
<?php endif; ?>

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Goal', true), array('action' => 'edit', $goal['Goal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Goal', true), array('action' => 'delete', $goal['Goal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $goal['Goal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Goals', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goal', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies', true), array('controller' => 'strategies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy', true), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
