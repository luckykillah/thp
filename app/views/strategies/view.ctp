<div class="strategies view">
<h2><?php  __('Strategy');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $strategy['Strategy']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $strategy['Strategy']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Body'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $strategy['Strategy']['body']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goal'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($strategy['Goal']['title'], array('controller' => 'goals', 'action' => 'view', $strategy['Goal']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $strategy['Strategy']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $strategy['Strategy']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Strategy', true), array('action' => 'edit', $strategy['Strategy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Strategy', true), array('action' => 'delete', $strategy['Strategy']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $strategy['Strategy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goals', true), array('controller' => 'goals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goal', true), array('controller' => 'goals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Updates', true), array('controller' => 'updates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Update', true), array('controller' => 'updates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Updates');?></h3>
	<?php if (!empty($strategy['Update'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Body'); ?></th>
		<th><?php __('Strategy Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($strategy['Update'] as $update):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $update['id'];?></td>
			<td><?php echo $update['date'];?></td>
			<td><?php echo $update['title'];?></td>
			<td><?php echo $update['body'];?></td>
			<td><?php echo $update['strategy_id'];?></td>
			<td><?php echo $update['created'];?></td>
			<td><?php echo $update['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'updates', 'action' => 'view', $update['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'updates', 'action' => 'edit', $update['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'updates', 'action' => 'delete', $update['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $update['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Update', true), array('controller' => 'updates', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
