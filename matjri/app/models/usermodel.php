<?php


namespace PHPMVC\Models;

class UserModel extends AbstractModel 
{

	public $id;
	public $user_name;
	public $email;
	public $password;


	protected static $tableName = 'users';
	protected static $tableSchema = array(
		'user_name'     => 'str',
		'email'			=> 'str',
		'password'		=> 'str',
		'position'		=> 'str',
		'user_img'		=> 'str'
	);



}