<?php
App::uses('AppController', 'Controller');
/**
 * Ocupations Controller
 *
 * @property Ocupation $Ocupation
 * @property PaginatorComponent $Paginator
 */
class OcupationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	
	public function index() {
		$conditions = array();
		//Transform POST into GET
		if(($this->request->is('post') || $this->request->is('put')) && isset($this->data['Filter'])){
			$filter_url['controller'] = $this->request->params['controller'];
			$filter_url['action'] = $this->request->params['action'];
			// We need to overwrite the page every time we change the parameters
			$filter_url['page'] = 1;

			// for each filter we will add a GET parameter for the generated url
			foreach($this->data['Filter'] as $name => $value){
				if($value){
					// You might want to sanitize the $value here
					// or even do a urlencode to be sure
					$filter_url[$name] = urlencode($value);
				}
			}	
			// now that we have generated an url with GET parameters, 
			// we'll redirect to that page
			return $this->redirect($filter_url);
		} else {
			// Inspect all the named parameters to apply the filters
			foreach($this->params['named'] as $param_name => $value){
				// Don't apply the default named parameters used for pagination
				if(!in_array($param_name, array('page','sort','direction','limit'))){
					// You may use a switch here to make special filters
					// like "between dates", "greater than", etc
					if($param_name == "search"){
						$conditions['OR'] = array(
							array('Ocupation.name LIKE' => '%' . $value . '%'),
    						array('Ocupation.dataregisto LIKE' => '%' . $value . '%')
						);
					} else {
						$conditions['Ocupation.'.$param_name] = $value;
					}					
					$this->request->data['Filter'][$param_name] = $value;
				}
			}
		}
		$this->Ocupation->recursive = 0;
		$this->paginate = array(
			'limit' => 8,
			'conditions' => $conditions
		);
		$this->set('ocupations', $this->paginate());

		// get the possible values for the filters and 
		// pass them to the view
		$users = $this->Ocupation->User->find('list');
		//$directors = $this->Ocupation->Director->find('list');
		$this->set(compact('users'));

		// Pass the search parameter to highlight the text
		$this->set('search', isset($this->params['named']['search']) ? $this->params['named']['search'] : "");
	}


/**
 * index method
 *
 * @return void
 
	public function index() {
		$this->Ocupation->recursive = 0;
		$this->set('ocupations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ocupation->exists($id)) {
			throw new NotFoundException(__('Invalid ocupation'));
		}
		$options = array('conditions' => array('Ocupation.' . $this->Ocupation->primaryKey => $id));
		$this->set('ocupation', $this->Ocupation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ocupation->create();
			if ($this->Ocupation->save($this->request->data)) {
				$this->Session->setFlash(__('The ocupation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ocupation could not be saved. Please, try again.'));
			}
		}
		$users = $this->Ocupation->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ocupation->exists($id)) {
			throw new NotFoundException(__('Invalid ocupation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ocupation->save($this->request->data)) {
				$this->Session->setFlash(__('The ocupation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ocupation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ocupation.' . $this->Ocupation->primaryKey => $id));
			$this->request->data = $this->Ocupation->find('first', $options);
		}
		$users = $this->Ocupation->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ocupation->id = $id;
		if (!$this->Ocupation->exists()) {
			throw new NotFoundException(__('Invalid ocupation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ocupation->delete()) {
			$this->Session->setFlash(__('The ocupation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ocupation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
