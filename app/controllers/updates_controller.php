<?php
class UpdatesController extends AppController {

	var $name = 'Updates';

	function index() {
		$this->Update->recursive = 0;
		$this->set('updates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid update', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('update', $this->Update->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Update->create();
			if ($this->Update->save($this->data)) {
				$this->Session->setFlash(__('The update has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The update could not be saved. Please, try again.', true));
			}
		}
		$strategies = $this->Update->Strategy->find('list');
		$tags = $this->Update->Tag->find('list');
		$this->set(compact('strategies', 'tags'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid update', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Update->save($this->data)) {
				$this->Session->setFlash(__('The update has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The update could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Update->read(null, $id);
		}
		$strategies = $this->Update->Strategy->find('list');
		$tags = $this->Update->Tag->find('list');
		$this->set(compact('strategies', 'tags'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for update', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Update->delete($id)) {
			$this->Session->setFlash(__('Update deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Update was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
