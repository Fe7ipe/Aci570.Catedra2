<h1>Editar proyecto</h1>
<br><br>
<?php

echo $this->Form->create('Reward');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('project_id');
echo $this->Form->input('description');
echo $this->Form->input('max_allowed');
echo $this->Form->input('amount');
echo $this->Form->input('order');
echo $this->Form->end('Guardar proyecto');

?>
<br><br>
<p><?php echo $this -> Html -> link('Volver', array('admin' => true, 'action' => 'index')); ?></p>
