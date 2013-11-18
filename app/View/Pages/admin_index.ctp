<h1>Panel ADM</h1>
<br /><br />
<ul>
	<li><?php echo $this->Html->link('Categories', array('admin' => true, 'controller' => 'categories', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link('Contributors', array('admin' => true, 'controller' => 'contributors', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link('Messages', array('admin' => true, 'controller' => 'messages', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link('Notifications', array('admin' => true, 'controller' => 'notifications', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link('Projects', array('admin' => true, 'controller' => 'projects', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link('Rewards', array('admin' => true, 'controller' => 'rewards', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link('Users', array('admin' => true, 'controller' => 'users', 'action' => 'index')); ?></li>
</ul>
