<?php
class UpdatesTagsController extends AppController {

	var $name = 'UpdatesTags';

	function index() {
		$this->UpdatesTag->recursive = 0;
		$this->set('updatesTags', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid updates tag', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('updatesTag', $this->UpdatesTag->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UpdatesTag->create();
			if ($this->UpdatesTag->save($this->data)) {
				$this->Session->setFlash(__('The updates tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The updates tag could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid updates tag', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UpdatesTag->save($this->data)) {
				$this->Session->setFlash(__('The updates tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The updates tag could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UpdatesTag->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for updates tag', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UpdatesTag->delete($id)) {
			$this->Session->setFlash(__('Updates tag deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Updates tag was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
