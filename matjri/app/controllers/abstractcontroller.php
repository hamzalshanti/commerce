<?php

namespace PHPMVC\Controllers;
use PHPMVC\Models\UserModel;
use PHPMVC\Models\CategoryModel;
use PHPMVC\Models\ItemModel;
class AbstractController
{


	protected $_controller;
	protected $_action;
	protected $_params;
	protected $_data = [];
	protected $_template;
	protected $_lang;
	
	public function notFoundAction(){
		$this->_view();
	}
	public function setController($controllerName){
		$this->_controller = $controllerName;
	}

	public function setAction($actionName){
		$this->_action = $actionName;	
	}

	public function setParams($params){
		$this->_params = $params;	
	}

	public function setTemplate($template){
		$this->_template = $template;	
	}

	public function setLang($lang){
		$this->_lang = $lang;	
	}

	protected function _view()
	{
		if(isset($_SESSION['user_id']))
		$this->_data['user_header'] = UserModel::getAll('WHERE id = ' . $_SESSION['user_id']);
		$this->_data['category_footer'] = CategoryModel::getAll('LIMIT 4');
		$this->_data['item_footer'] = ItemModel::getAll('LIMIT 4');

		if($this->_action == 'notFoundAction')
		{
			$notfound =  VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
			$this->_template->setActionView($notfound);
			$this->_template->renderApp();
		}
		else{
			$view = VIEWS_PATH . $this->_controller . DS . $this->_action . '.view.php';
			if(file_exists($view))
			{
				$this->_data = array_merge($this->_data, $this->_lang->getDictionary());
				$this->_template->setData($this->_data);
				$this->_template->setActionView($view);
				$this->_template->renderApp();
			}
			else
			{
				require_once VIEWS_PATH . 'notfound' . DS . 'noview.view.php';
			}
		}
	}
}