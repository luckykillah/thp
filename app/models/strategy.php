<?php
class Strategy extends AppModel {
	var $name = 'Strategy';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Goal' => array(
			'className' => 'Goal',
			'foreignKey' => 'goal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Update' => array(
			'className' => 'Update',
			'foreignKey' => 'strategy_id',
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

}
