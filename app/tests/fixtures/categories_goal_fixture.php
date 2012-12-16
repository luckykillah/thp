<?php
/* CategoriesGoal Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EST/-5.0/no DST' instead in /Users/christinalutters/Sites/thp/cake/console/templates/default/classes/fixture.ctp on line 24
2012-12-15 20:42:36 : 1355622156 */
class CategoriesGoalFixture extends CakeTestFixture {
	var $name = 'CategoriesGoal';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'primary'),
		'goal_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4, 'key' => 'index'),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'category_id' => array('column' => 'category_id', 'unique' => 0), 'goal_id' => array('column' => 'goal_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'goal_id' => 1,
			'category_id' => 1
		),
	);
}
