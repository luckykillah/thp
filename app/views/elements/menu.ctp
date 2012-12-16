<ul id="nav">
	<li>
		<?=$this->Html->link('Posts', '/posts', array('class' => '')); ?>
		<ul class="sub">
			<li><?= $this->Html->link(__('New Post', true), array('action' => 'add')); ?></li>
		</ul>
	</li>
	<li>
		<?=$this->Html->link('Goals', '/goals', array('class' => '')); ?>
		<ul class="sub">
			<li><?= $this->Html->link(__('New Goal', true), array('controller' => 'goals', 'action' => 'add')); ?> </li>
		</ul>
	</li>
	<li>
		<?=$this->Html->link('Strategies', '/strategies', array('class' => '')); ?>
		<ul class="sub">
			<li><?= $this->Html->link(__('New Strategy', true), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
		</ul>
	</li>
	<li>
		<?=$this->Html->link('Updates', '/updates', array('class' => '')); ?>
		<ul class="sub">
			<li><?= $this->Html->link(__('New Update', true), array('controller' => 'updates', 'action' => 'add')); ?> </li>
		</ul>
	</li>
	<li>
		<?=$this->Html->link('Categories', '/categories', array('class' => '')); ?>
		<ul class="sub">
			<li><?= $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		</ul>
	</li>
	<li>
		<?=$this->Html->link('Tags', '/tags', array('class' => '')); ?>
		<ul class="sub">
			<li><?= $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add')); ?> </li>	
		</ul>
	</li>
</ul>

		
		
		
	
		