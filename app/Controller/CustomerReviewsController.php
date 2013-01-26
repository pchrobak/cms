<?php
App::uses('AppController', 'Controller');
/**
 * CustomerReviews Controller
 *
 * @property CustomerReview $CustomerReview
 */
class CustomerReviewsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomerReview->recursive = 0;
		$this->set('customerReviews', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CustomerReview->id = $id;
		if (!$this->CustomerReview->exists()) {
			throw new NotFoundException(__('Invalid customer review'));
		}
		$this->set('customerReview', $this->CustomerReview->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerReview->create();
			if ($this->CustomerReview->save($this->request->data)) {
				$this->Session->setFlash(__('The customer review has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer review could not be saved. Please, try again.'));
			}
		}
		$products = $this->CustomerReview->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CustomerReview->id = $id;
		if (!$this->CustomerReview->exists()) {
			throw new NotFoundException(__('Invalid customer review'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerReview->save($this->request->data)) {
				$this->Session->setFlash(__('The customer review has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer review could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CustomerReview->read(null, $id);
		}
		$products = $this->CustomerReview->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->CustomerReview->id = $id;
		if (!$this->CustomerReview->exists()) {
			throw new NotFoundException(__('Invalid customer review'));
		}
		if ($this->CustomerReview->delete()) {
			$this->Session->setFlash(__('Customer review deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer review was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
