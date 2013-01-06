<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property Product $Product
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Product' => array(
			'className' => 'Product',
			'joinTable' => 'products_categories',
			'foreignKey' => 'id',
			'associationForeignKey' => 'product_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
