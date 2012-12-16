<?php
/* UpdatesTag Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EST/-5.0/no DST' instead in /Users/christinalutters/Sites/thp/cake/console/templates/default/classes/fixture.ctp on line 24
2012-12-15 20:42:38 : 1355622158 */
class UpdatesTagFixture extends CakeTestFixture {
	var $name = 'UpdatesTag';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'primary'),
		'id_updates' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4, 'key' => 'index'),
		'id_tags' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'id_updates' => array('column' => 'id_updates', 'unique' => 0), 'id_tags' => array('column' => 'id_tags', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'id_updates' => 1,
			'id_tags' => 1
		),
	);
}
