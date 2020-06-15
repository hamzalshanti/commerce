<?php
namespace PHPMVC\Controllers;
use PHPMVC\Models\ItemModel;
use PHPMVC\Models\CategoryModel;
use PHPMVC\Models\UserModel;

class IndexController extends AbstractController
{
	public function defaultAction()
	{
		$this->_lang->load('template\common');
		$this->_lang->load('index\default');
		$this->_data['item'] = ItemModel::getAll();
		$this->_data['category'] = CategoryModel::getAll('LIMIT 8');
		$this->_data['user_counts'] = UserModel::getCounts();
		$this->_data['category_counts'] = CategoryModel::getCounts();
		$this->_data['item_counts'] = ItemModel::getCounts();
		$this->_view();
	}

	public function addAction()
	{
		$this->_view();
	}
	
}