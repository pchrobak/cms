<?php
App::uses('AppModel', 'Model');
/**
 * Faq Model
 *
 * @property Product $Product
 */
class Faq extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'question';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Product' => array(
			'className' => 'Product',
			'joinTable' => 'products_faqs',
			'foreignKey' => 'faq_id',
			'associationForeignKey' => 'product_id',
			'unique' => 'keepExisting',
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
