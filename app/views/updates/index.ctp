<div class="updates index">
	<h2><?php __('Updates');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('body');?></th>
			<th><?php echo $this->Paginator->sort('strategy_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($updates as $update):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $update['Update']['id']; ?>&nbsp;</td>
		<td><?php echo $update['Update']['date']; ?>&nbsp;</td>
		<td><?php echo $update['Update']['title']; ?>&nbsp;</td>
		<td><?php echo $update['Update']['body']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($update['Strategy']['title'], array('controller' => 'strategies', 'action' => 'view', $update['Strategy']['id'])); ?>
		</td>
		<td><?php echo $update['Update']['created']; ?>&nbsp;</td>
		<td><?php echo $update['Update']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $update['Update']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $update['Update']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $update['Update']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $update['Update']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Update', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Strategies', true), array('controller' => 'strategies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy', true), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>