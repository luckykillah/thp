<div class="goals index">
	<h2><?php __('Goals');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($goals as $goal):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $this->Html->link(__($goal['Goal']['title'], true), array('action' => 'view', $goal['Goal']['id'])); ?></td>
		<td><?php 
			if($goal['Goal']['status'] == 1){ echo 'Active'; } else{ echo 'Inactive'; }?>&nbsp;</td>
		<td><?= date('n.j.y', time($goal['Goal']['created'])); ?>&nbsp;</td>
		<td><?= date('n.j.y', time($goal['Goal']['modified'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $goal['Goal']['id']), array('data-icon' => '&#xe001', 'escape' => false)); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $goal['Goal']['id']), array('data-icon' => '&#xe00b', 'escape' => false), null, sprintf(__('Are you sure you want to delete # %s?', true), $goal['Goal']['id'])); ?>
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
