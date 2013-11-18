<h1>Usuarios</h1>

<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Activa</th>
		<th>Creado</th>
		<th>Modificado</th>
		<th>Acci&oacute;n</th>
		<th>Acci&oacute;n</th>
	</tr>
	<?php foreach($categories as $category): ?>
	<tr>
		<td><?php echo $this->Html->link(
			h($category['Category']['id']),
			array(
				'controller' => 'categories', 'action' => 'view',
				$category['Category']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($category['Category']['name']),
			array(
				'controller' => 'categories', 'action' => 'view',
				$category['Category']['id']
			)
		); ?></td>
		<td><?php echo ($category['Category']['is_active']) ? 'yes' : 'no'; ?></td>
		<td><?php echo $category['Category']['created']; ?></td>
		<td><?php echo $category['Category']['modified']; ?></td>
		<td><?php echo $this->Html->link(
			'Editar',
			array(
				'controller' => 'categories', 'action' => 'edit',
				$category['Category']['id']
			)
		); ?></td>
		<td><?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $category['Category']['id']),
			array('confirm' => 'Eliminar categoria '.$category['Category']['name'].'?')
		); ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($category); ?>
</table>

<p><?php echo $this->Html->link('Agregar categoria', array('admin' => true, 'action' => 'add')); ?></p>






