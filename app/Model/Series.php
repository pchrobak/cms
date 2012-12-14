<?php
App::uses('AppModel', 'Model');
/**
 * Series Model
 *
 */
class Series extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'series_name';
	
	public $validate = array(
		'series_name' => array(
            'rule'    => 'alphaNumeric',
            'required' => true,
            'message'  => 'This field cannot be blank'
        ),
		'html_name' => array(
            'rule'    => 'alphaNumeric',
            'required' => true,
            'message'  => 'This field cannot be blank'
        ),
		'directory' => array(
            'rule'    => 'alphaNumeric',
            'required' => true,
            'message'  => 'This field cannot be blank'
        ),
		'overview' => array(
            'rule'    => array('minLength', 5),
            'required' => true,
            'message'  => 'This field cannot be blank'
        ),
		'product_line_overview' => array(
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
