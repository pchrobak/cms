<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 */
class Category extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	
	public $validate = array(
		'name' => array(
            'rule'    => 'notEmpty',
            'required' => true,
            'message'  => 'This field cannot be blank'
        ),
		'overview' => array(
            'rule'    => array('minLength', 5),
            'required' => true,
            'message'  => 'This field cannot be blank'
        ),
		'visible' => array(
            'rule'    => 'numeric',
            'required' => true,
            'message'  => 'This field cannot be blank'
        )
		
	);
}
