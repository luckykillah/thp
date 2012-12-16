<?php
class Goal extends AppModel {
	var $name = 'Goal';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Strategy' => array(
			'className' => 'Strategy',
			'foreignKey' => 'goal_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


	var $hasAndBelongsToMany = array(
		'Category' => array(
			'className' => 'Category',
			'joinTable' => 'categories_goals',
			'foreignKey' => 'goal_id',
			'associationForeignKey' => 'category_id',
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
