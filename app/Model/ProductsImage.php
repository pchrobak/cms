<?php
App::uses('AppModel', 'Model');
/**
 * ProductsImage Model
 *
 * @property Products $Products
 */
class ProductsImage extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'filename';


	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $actsAs = array(
        'Upload.Upload' => array(
            'filename' => array(
                'fields' => array(
                    'dir' => 'photo_dir'
                ),
                'thumbnailSizes' => array(
                    'large' => '1024x768',
                    'small' => '640x480',
                    'thumb' => '100x100'
                )
            )
        )
    );
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
