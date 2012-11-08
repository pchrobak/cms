<?php
App::uses('AppController', 'Controller');
/**
 * Series Controller
 *
 * @property Series $Series
 */
class SeriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Series->recursive = 0;
		$this->set('series', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Series->id = $id;
		if (!$this->Series->exists()) {
			throw new NotFoundException(__('Invalid series'));
		}
		$this->set('series', $this->Series->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Series->create();
			if ($this->Series->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Series!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Series->id = $id;
		if (!$this->Series->exists()) {
			throw new NotFoundException(__('Invalid series'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Series->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Series!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->Series->read(null, $id);
		}
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
		$this->Series->id = $id;
		if (!$this->Series->exists()) {
			throw new NotFoundException(__('Invalid series'));
		}
		if ($this->Series->delete()) {
			$this->Session->setFlash(__('Series was successfully deleted!'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Series was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
