<div class="postsTags view">
<h2><?php  __('Posts Tag');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $postsTag['PostsTag']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Posts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $postsTag['PostsTag']['id_posts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Tags'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $postsTag['PostsTag']['id_tags']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Posts Tag', true), array('action' => 'edit', $postsTag['PostsTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Posts Tag', true), array('action' => 'delete', $postsTag['PostsTag']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $postsTag['PostsTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts Tags', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posts Tag', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
