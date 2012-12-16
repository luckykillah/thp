<div class="strategies view">
	<h2>Strategy: <?= $strategy['Strategy']['title']; ?></h2>
	<?= $strategy['Strategy']['body']; ?>
	Goal: <?= $this->Html->link($strategy['Goal']['title'], array('controller' => 'goals', 'action' => 'view', $strategy['Goal']['id'])); ?>
</div>

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('Edit Strategy', true), array('action' => 'edit', $strategy['Strategy']['id'])); ?> </li>
		<li><?= $this->Html->link(__('Delete Strategy', true), array('action' => 'delete', $strategy['Strategy']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $strategy['Strategy']['id'])); ?> </li>
		<li><?= $this->Html->link(__('List Strategies', true), array('action' => 'index')); ?> </li>
		<li><?= $this->Html->link(__('New Strategy', true), array('action' => 'add')); ?> </li>
		<li><?= $this->Html->link(__('List Goals', true), array('controller' => 'goals', 'action' => 'index')); ?> </li>
		<li><?= $this->Html->link(__('New Goal', true), array('controller' => 'goals', 'action' => 'add')); ?> </li>
		<li><?= $this->Html->link(__('List Updates', true), array('controller' => 'updates', 'action' => 'index')); ?> </li>
		<li><?= $this->Html->link(__('New Update', true), array('controller' => 'updates', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="related">
	<h3>Updates</h3>
	<ul>
	<?php if (!empty($strategy['Update'])):?>
	<?php
		$i = 0;
		foreach ($strategy['Update'] as $update):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<li <?=$class;?>>
			<?= $this->Html->link(__($update['date'], true), array('controller' => 'updates', 'action' => 'view', $update['id'])); ?>
		</li>
		<? endforeach; endif; ?>
		<li><?= $this->Html->link(__('Add an Update', true), array('controller' => 'updates', 'action' => 'add'));?> </li>	
	</ul>
</div>
