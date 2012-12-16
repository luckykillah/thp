<?php
class StrategiesController extends AppController {

	var $name = 'Strategies';

	function index() {
		$this->Strategy->recursive = 0;
		$this->set('strategies', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid strategy', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('strategy', $this->Strategy->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Strategy->create();
			if ($this->Strategy->save($this->data)) {
				$this->Session->setFlash(__('The strategy has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategy could not be saved. Please, try again.', true));
			}
		}
		$goals = $this->Strategy->Goal->find('list');
		$this->set(compact('goals'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid strategy', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Strategy->save($this->data)) {
				$this->Session->setFlash(__('The strategy has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategy could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Strategy->read(null, $id);
		}
		$goals = $this->Strategy->Goal->find('list');
		$this->set(compact('goals'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for strategy', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Strategy->delete($id)) {
			$this->Session->setFlash(__('Strategy deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Strategy was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
