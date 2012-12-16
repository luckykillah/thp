<div class="updatesTags view">
<h2><?php  __('Updates Tag');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $updatesTag['UpdatesTag']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Updates'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $updatesTag['UpdatesTag']['id_updates']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Tags'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $updatesTag['UpdatesTag']['id_tags']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Updates Tag', true), array('action' => 'edit', $updatesTag['UpdatesTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Updates Tag', true), array('action' => 'delete', $updatesTag['UpdatesTag']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $updatesTag['UpdatesTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Updates Tags', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Updates Tag', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
