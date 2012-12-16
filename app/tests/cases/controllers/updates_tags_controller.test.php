<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EST/-5.0/no DST' instead in /Users/christinalutters/Sites/thp/cake/console/templates/default/classes/test.ctp on line 22
/* UpdatesTags Test cases generated on: 2012-12-15 20:42:55 : 1355622175*/
App::import('Controller', 'UpdatesTags');

class TestUpdatesTagsController extends UpdatesTagsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UpdatesTagsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.updates_tag');

	function startTest() {
		$this->UpdatesTags =& new TestUpdatesTagsController();
		$this->UpdatesTags->constructClasses();
	}

	function endTest() {
		unset($this->UpdatesTags);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
