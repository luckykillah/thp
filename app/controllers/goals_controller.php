<?php
class GoalsController extends AppController {

	var $name = 'Goals';

	function index() {
		$this->Goal->recursive = 0;
		$this->set('goals', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid goal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('goal', $this->Goal->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Goal->create();
			if ($this->Goal->save($this->data)) {
				$this->Session->setFlash(__('The goal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The goal could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->Goal->Category->find('list');
		$this->set(compact('categories'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid goal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Goal->save($this->data)) {
				$this->Session->setFlash(__('The goal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The goal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Goal->read(null, $id);
		}
		$categories = $this->Goal->Category->find('list');
		$this->set(compact('categories'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for goal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Goal->delete($id)) {
			$this->Session->setFlash(__('Goal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Goal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
