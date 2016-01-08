<?php
App::uses('AppModel', 'Model');
/**
 * Payee Model
 *
 */
class Payee extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'payee_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'payee_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
