<?php
App::uses('AppController', 'Controller');
/**
 * SitePages Controller
 *
 * @property SitePage $SitePage
 */
class SitePagesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SitePage->recursive = 0;
		$this->set('sitePages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SitePage->id = $id;
		if (!$this->SitePage->exists()) {
			throw new NotFoundException(__('Invalid site page'));
		}
		$this->set('sitePage', $this->SitePage->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SitePage->create();
			if ($this->SitePage->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a site page!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));			}
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
		$this->SitePage->id = $id;
		if (!$this->SitePage->exists()) {
			throw new NotFoundException(__('Invalid site page'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SitePage->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a site page!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->SitePage->read(null, $id);
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
		$this->SitePage->id = $id;
		if (!$this->SitePage->exists()) {
			throw new NotFoundException(__('Invalid site page'));
		}
		if ($this->SitePage->delete()) {
			$this->Session->setFlash(__('A page was successfully deleted!', 'default', array('class' => 'success_message')));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sorry, there was an error, A page was not deleted', 'default', array('class' => 'error_message')));
		$this->redirect(array('action' => 'index'));
	}
}