<?php

namespace PHPMVC\Controllers;
use PHPMVC\Models\AbstractModel;
use PHPMVC\LIB\Helper;

class ItemController extends AbstractController
{
	use Helper;
	public function idAction()
	{
		
		$this->_data['item'] = AbstractModel::Join('items', 'categories', 'items.id As item_id, item_name, item_price, item_desc, item_img, item_qty, category_id, cat_name, categories.id As cat_id','category_id', 'id', 'items.id = ' . $this->_params[0]);
		$this->_view();

	}

	public function addtocartAction(){
		if(!isset($_SESSION['user']))
		{
		$this->redirect('http://localhost/commerce/matjri/public/login');	
		}
		$item_id = $this->_params[0];
		$user_id = $_SESSION['user_id'];
		if(AbstractModel::addToCart($user_id, $item_id)){
			
			$this->redirect($_SERVER['HTTP_REFERER']);
		}
	}

}
	
