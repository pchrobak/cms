<?php
App::uses('AppController', 'Controller');
/**
 * ProductsImages Controller
 *
 * @property ProductsImage $ProductsImage
 */
class ProductsImagesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductsImage->recursive = 0;
		$this->set('productsImages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProductsImage->id = $id;
		if (!$this->ProductsImage->exists()) {
			throw new NotFoundException(__('Invalid products image'));
		}
		$this->set('productsImage', $this->ProductsImage->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductsImage->create();
			if ($this->ProductsImage->save($this->request->data)) {
				$this->Session->setFlash(__('The products image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The products image could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductsImage->Product->find('list');
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
		$this->ProductsImage->id = $id;
		if (!$this->ProductsImage->exists()) {
			throw new NotFoundException(__('Invalid products image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductsImage->save($this->request->data)) {
				$this->Session->setFlash(__('The products image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The products image could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProductsImage->read(null, $id);
		}
		$products = $this->ProductsImage->Product->find('list');
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
		$this->ProductsImage->id = $id;
		if (!$this->ProductsImage->exists()) {
			throw new NotFoundException(__('Invalid products image'));
		}
		if ($this->ProductsImage->delete()) {
			$this->Session->setFlash(__('Products image deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Products image was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
