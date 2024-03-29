<?php

$cakeDescription = 'Admin CP';
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('reset');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('base');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, array('admin' => false, 'controller' => 'admin', 'action' => 'index')); ?></h1>
			<p>
				<?php echo ($loggedIn) ? $this->Html->link('Logout', array('admin' => false, 'controller' => 'users', 'action' => 'logout')) : '' ?>
			</p>
			<p><?php echo $this->Html->link('Pagina principal', array('admin' => false, 'controller' => 'pages', 'action' => 'index')); ?></p>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
