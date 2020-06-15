<?php
namespace PHPMVC\Controllers;
use PHPMVC\Models\CategoryModel;
use PHPMVC\Models\ItemModel;

class CategoryController extends AbstractController
{
	public function defaultAction()
	{
		$this->_data['category'] = CategoryModel::getAll();
		$this->_view();
	}

	public function showAction()
	{
		$predict = 'WHERE category_id = '. $this->_params[0];
		$this->_data['item'] = ItemModel::getAll($predict);
		$this->_data['category'] = CategoryModel::getAll('WHERE id = ' . $this->_params[0]);
		$this->_view();
	}


	
}