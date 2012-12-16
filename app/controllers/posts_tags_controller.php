<?php
class PostsTagsController extends AppController {

	var $name = 'PostsTags';

	function index() {
		$this->PostsTag->recursive = 0;
		$this->set('postsTags', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid posts tag', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('postsTag', $this->PostsTag->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PostsTag->create();
			if ($this->PostsTag->save($this->data)) {
				$this->Session->setFlash(__('The posts tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The posts tag could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid posts tag', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PostsTag->save($this->data)) {
				$this->Session->setFlash(__('The posts tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The posts tag could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PostsTag->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for posts tag', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PostsTag->delete($id)) {
			$this->Session->setFlash(__('Posts tag deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Posts tag was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
