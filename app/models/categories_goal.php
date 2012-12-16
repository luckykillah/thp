<?php
class CategoriesGoal extends AppModel {
	var $name = 'CategoriesGoal';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Goal' => array(
			'className' => 'Goal',
			'foreignKey' => 'goal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
