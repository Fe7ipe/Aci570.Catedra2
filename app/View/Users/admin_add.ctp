<h1>Add user</h1>
<br><br>
<?php

echo $this->Form->create('User');
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->input('first_name');
echo $this->Form->input('last_name');
echo $this->Form->input('is_active');
echo $this->Form->input('is_admin');
echo $this->Form->end('Guardar usuario');

?>
<br><br>
<p><?php echo $this->Html->link('Volver', array('controller' => 'users', 'action' => 'index')); ?></p>