<div class="strategies index">
	<h2><?php __('Strategies');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<? foreach ($strategies as $strategy): ?>
	<tr>
		<td><?= $this->Html->link(__($strategy['Goal']['title'], true), array('action' => 'view', $strategy['Strategy']['id'])); ?> (<em>for <?= $this->Html->link($strategy['Goal']['title'], array('controller' => 'goals', 'action' => 'view', $strategy['Goal']['id'])); ?></em>)</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $strategy['Strategy']['id']), array('data-icon' => '&#xe001', 'escape' => false)); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $strategy['Strategy']['id']), array('data-icon' => '&#xe00b', 'escape' => false), null, sprintf(__('Are you sure you want to delete # %s?', true), $strategy['Strategy']['id'])); ?>
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
		<?php echo $this->Paginator->prev('prev', array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next('next', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
