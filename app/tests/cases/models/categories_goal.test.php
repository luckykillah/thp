<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EST/-5.0/no DST' instead in /Users/christinalutters/Sites/thp/cake/console/templates/default/classes/test.ctp on line 22
/* CategoriesGoal Test cases generated on: 2012-12-15 20:42:36 : 1355622156*/
App::import('Model', 'CategoriesGoal');

class CategoriesGoalTestCase extends CakeTestCase {
	var $fixtures = array('app.categories_goal', 'app.goal', 'app.category', 'app.post', 'app.categories_post');

	function startTest() {
		$this->CategoriesGoal =& ClassRegistry::init('CategoriesGoal');
	}

	function endTest() {
		unset($this->CategoriesGoal);
		ClassRegistry::flush();
	}

}
