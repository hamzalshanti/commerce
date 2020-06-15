<?php


namespace PHPMVC\Controllers;
use PHPMVC\Models\AbstractModel;
use PHPMVC\Models\UserModel;
use PHPMVC\LIB\Helper;

class CartController extends AbstractController
{
	use Helper;
	public function showAction()
	{
		if(!isset($_SESSION['user']))
		{
		$this->redirect('http://localhost/commerce/matjri/public/login');	
		}
		$this->_data['items'] = AbstractModel::cart($this->_params[0]);
		$this->_data['total_price'] = AbstractModel::cartTotal($this->_params[0]);
		$this->_data['total_qty'] = AbstractModel::cartqty($this->_params[0]);
		$this->_view();
	}

		public function deleteAction()
	{
		if(!isset($_SESSION['user']))
		{
		$this->redirect('http://localhost/commerce/matjri/public/login');	
		}

		$id = $this->_params[0];
		if(AbstractModel::deleteFromCart($id)){
			$this->redirect($_SERVER['HTTP_REFERER']);
		
		}	

	}

}