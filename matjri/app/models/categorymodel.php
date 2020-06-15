<?php



namespace PHPMVC\Models;

class CategoryModel extends AbstractModel 
{

	public $id;
	public $cat_name;
	public $cat_desc;


	protected static $tableName = 'categories';
	protected static $tableSchema = array(
		'cat_name'     => 'str',
		'cat_desc'	=> 'str'
	);



}