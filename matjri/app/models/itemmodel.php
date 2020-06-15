<?php



namespace PHPMVC\Models;

class ItemModel extends AbstractModel 
{

	public $id;
	public $item_name;
	public $item_price;
	public $item_img;
	public $item_rate;
	public $category_id;

	protected static $tableName = 'items';
	protected static $tableSchema = array(
		'item_name'     => 'str',
		'item_rate'	=> 'int',
		'item_img'		=> 'str',
		'item_price'		=> 'int',
		'category_id'	=> 'int'
	);



}