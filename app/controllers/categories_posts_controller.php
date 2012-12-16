<?php
class CategoriesPostsController extends AppController {

	var $name = 'CategoriesPosts';

	function index() {
		$this->CategoriesPost->recursive = 0;
		$this->set('categoriesPosts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid categories post', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('categoriesPost', $this->CategoriesPost->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CategoriesPost->create();
			if ($this->CategoriesPost->save($this->data)) {
				$this->Session->setFlash(__('The categories post has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categories post could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid categories post', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CategoriesPost->save($this->data)) {
				$this->Session->setFlash(__('The categories post has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categories post could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CategoriesPost->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for categories post', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CategoriesPost->delete($id)) {
			$this->Session->setFlash(__('Categories post deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Categories post was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
