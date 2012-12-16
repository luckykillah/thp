<?php
class CategoriesGoalsController extends AppController {

	var $name = 'CategoriesGoals';

	function index() {
		$this->CategoriesGoal->recursive = 0;
		$this->set('categoriesGoals', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid categories goal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('categoriesGoal', $this->CategoriesGoal->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CategoriesGoal->create();
			if ($this->CategoriesGoal->save($this->data)) {
				$this->Session->setFlash(__('The categories goal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categories goal could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid categories goal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CategoriesGoal->save($this->data)) {
				$this->Session->setFlash(__('The categories goal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categories goal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CategoriesGoal->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for categories goal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CategoriesGoal->delete($id)) {
			$this->Session->setFlash(__('Categories goal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Categories goal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
