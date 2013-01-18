<?php
App::uses('AppModel', 'Model');
/**
 * Download Model
 *
 */
class Download extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'display_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'display_name' => array(
			'rule'    => 'notEmpty',
			'message' => 'Display name cannot be blank'
		),
		'filename' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a file'
		)
	);
}
