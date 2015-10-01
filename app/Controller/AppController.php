<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

	public $components = array(
		'Session','Admin.AccessControl',
		'Auth' => array(
		    'loginRedirect' => array('plugin'=>null,'controller' => 'posts', 'action' => 'index'),
		    'logoutRedirect' => array('plugin'=>null,'controller' => 'posts', 'action' => 'index'),
			'loginAction'    => '/admin/users/login',
			'authError' 	=> 'Faça login antes!',
		    'authorize' => array('Controller')
		)
	);

	public function beforeFilter(){
		parent::beforeFilter();
		//$this->set('title_for_layout','Seção de Administração para o Aplicativo');
		$this->set('current_user', $this->Auth->user());
		$controller=$this->params['controller']; 
		$action=$this->params['action']; 
		$user = $this->Auth->user();
		$groupid=$user['group_id'];

        $this->Auth->allow('index');//'add'

		if($action != 'index'){// || $action != 'add'
			if(($this->AccessControl->access($controller,$action) == 'admins') && ($groupid ==1)){
				//
			}elseif(($this->AccessControl->access($controller,$action) == 'managers') && ($groupid ==2)){
				//
			}else{
				if($this->AccessControl->access($controller,$action) == false){
					$this->Session->setFlash(__('Privilégio não cadastrado/Acesso Negado!'));
				}else{
					$this->redirect(array('plugin'=>'admin','controller' => 'users', 'action' => 'login'));
				}
			}
		}

	} 

	public function isAuthorized($user) {
		return true;
	}

}
