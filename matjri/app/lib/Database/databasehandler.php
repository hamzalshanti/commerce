<?php

namespace PHPMVC\LIB\Database;


class DatabaseHandler
{


public function getConn(){
	return mysqli_connect('localhost', 'root', '', 'ecommerce');
}

}