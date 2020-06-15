<?php

namespace PHPMVC\Controllers;
use PHPMVC\Models\AbstractModel;
class LoginController extends AbstractController
{
	public function defaultAction()
	{
		// $this->_lang->load('template\common');
		// $this->_lang->load('login\default

			 if(isset($_SESSION['user'])) {
		        header('Location: http://localhost/commerce/matjri/public');
			}

		$this->_view();
	}

		
	

		protected function _view()
	{
			
				$this->_template->renderLogin();
	}

}