<?php
App::uses('AppController', 'Controller');
/**
 * Alocations Controller
 *
 * @property Alocation $Alocation
 * @property PaginatorComponent $Paginator
 */
class AlocationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	
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
							array('Alocation.cargo LIKE' => '%' . $value . '%'),
    						//sarray('Alocation.description LIKE' => '%' . $value . '%')
						);
					} else {
						$conditions['Alocation.'.$param_name] = $value;
					}					
					$this->request->data['Filter'][$param_name] = $value;
				}
			}
		}
		$this->Alocation->recursive = 0;
		$this->paginate = array(
			'limit' => 8,
			'conditions' => $conditions
		);
		$this->set('alocations', $this->paginate());

		// get the possible values for the filters and 
		// pass them to the view
		$groups = $this->Alocation->Group->find('list');
		//$directors = $this->Alocation->Director->find('list');
		$this->set(compact('groups'));

		// Pass the search parameter to highlight the text
		$this->set('search', isset($this->params['named']['search']) ? $this->params['named']['search'] : "");
	}
	
	
	
/*	
	public function index() {
		$this->Alocation->recursive = 0;
		$this->set('alocations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Alocation->exists($id)) {
			throw new NotFoundException(__('Invalid alocation'));
		}
		$options = array('conditions' => array('Alocation.' . $this->Alocation->primaryKey => $id));
		$this->set('alocation', $this->Alocation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Alocation->create();
			if ($this->Alocation->save($this->request->data)) {
				$this->Session->setFlash(__('The alocation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alocation could not be saved. Please, try again.'));
			}
		}
		$groups = $this->Alocation->Group->find('list');
		$users = $this->Alocation->User->find('list');
		$ocupations = $this->Alocation->Ocupation->find('list');
		$this->set(compact('groups', 'users', 'ocupations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Alocation->exists($id)) {
			throw new NotFoundException(__('Invalid alocation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Alocation->save($this->request->data)) {
				$this->Session->setFlash(__('The alocation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alocation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Alocation.' . $this->Alocation->primaryKey => $id));
			$this->request->data = $this->Alocation->find('first', $options);
		}
		$groups = $this->Alocation->Group->find('list');
		$users = $this->Alocation->User->find('list');
		$ocupations = $this->Alocation->Ocupation->find('list');
		$this->set(compact('groups', 'users', 'ocupations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Alocation->id = $id;
		if (!$this->Alocation->exists()) {
			throw new NotFoundException(__('Invalid alocation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Alocation->delete()) {
			$this->Session->setFlash(__('The alocation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The alocation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
