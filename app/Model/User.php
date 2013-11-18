<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
	public $validate = array(
		'email' => array(
			'email',
			'rule'		=> array('notEmpty'),
			'message'	=> 'Es necesario introducir el correo',
			'required'	=> array(
				'rule'	=> array('notEmpty'),
				'message'	=> 'Es necesario un correo'
			)
		),
		'password' => array(
			'rule' => array('notEmpty'),
			'message'	=> 'Es necesario introducir la contraseña',
			'required'	=> array(
				'rule'	=> array('notEmpty'),
				'message'	=> 'Es necesario una contraseña'
			)
		),
		'first_name' => array(
			'rule'	=> array('notEmpty')
		),
		'last_name' => array(
			'rule'	=> array('notEmpty')
		)
	);
	
	public function beforeSave($options = array()) {
		
		if(!empty($this->data[$this->alias]['passEdit'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['passEdit']);
		}
		elseif(isset($this->data[$this->alias]['password']) && !isset($this->data[$this->alias]['passEdit'])) {
	        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	    }
		else {
			unset($this->data[$this->alias]['password']);
		}
		
		
	    return true;
	}
}
