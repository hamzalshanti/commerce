<?php 

namespace PHPMVC\Models;
use PHPMVC\LIB\Database\DatabaseHandler;

class AbstractModel
{

	public static function bulidValues($ob)
	{
		$para = '';
		foreach (static::$tableSchema as $col => $type) {
			if($type == 'str')
			$para .=  "'" . $ob->$col . "'" . ',';
			else
			$para .=  $ob->$col . ',';

		}
			return trim($para, ',');
	}

	public static function bulidCols($ob)
	{
		$para = '';
		foreach (static::$tableSchema as $col => $type) {
			$para .=  $col  . ',';

		}
			return trim($para, ',');
	}


	public static function bulidUpdate($ob)
	{
		$para = '';
		foreach (static::$tableSchema as $col => $type) {
			$para .=  $col  . ' = ';
			if($type == 'str')
			$para .=  "'" . $ob->$col . "'" . ',';
			else
			$para .=  $ob->$col . ',';

		}
			return trim($para, ',');
	}


	public static function create($ob)
	{
		$conn = DatabaseHandler::getConn();

		$sql = "INSERT INTO ". static::$tableName . " (" . self::bulidCols($ob) . ") "  . " VALUES (" . self::bulidValues($ob) . ')';
		$result = mysqli_query($conn, $sql);
		return $result;

	}

	public static function edit($ob)
	{

		
		$conn = DatabaseHandler::getConn();

		$sql = "UPDATE  ". static::$tableName . " SET " . self::bulidUpdate($ob) . " WHERE id = $ob->id" ;
		$result = mysqli_query($conn, $sql);
		return $result;


	}

	public static function delete($ob)
	{

		
		$conn = DatabaseHandler::getConn();
		$sql = "DELETE FROM  " . static::$tableName . " WHERE id = $ob->id" ;
		$result = mysqli_query($conn, $sql);
		return $result;


	}

	public function getAll($predict = '')
	{
		$conn = DatabaseHandler::getConn();
		$sql = "SELECT * FROM " . static::$tableName . ' ' . $predict;
		$result = mysqli_query($conn, $sql);
		return $result;		
	}

	public function Join($table1, $table2, $cols, $col1, $col2, $predict)
	{
		$conn = DatabaseHandler::getConn();
		$sql = "SELECT " . $cols .
		" FROM " . $table1 .
		" INNER JOIN " . $table2 .
		" ON " .$table1. "." .$col1 ." = " . $table2 . "." . $col2 . " WHERE " . $predict;
		$result = mysqli_query($conn, $sql);
		return $result;		
	}

	public function cart($id){
		$conn 	= DatabaseHandler::getConn();
		$sql 	= "SELECT * FROM items,cart WHERE cart.user_id = " . $id ." AND cart.item_id = items.id";
		$result = mysqli_query($conn, $sql);
		return $result;
	}

	public function cartTotal($id){
		$conn 	= DatabaseHandler::getConn();
		$sql 	= "SELECT item_price FROM items,cart WHERE cart.user_id = " . $id ." AND cart.item_id = items.id";
		$result = mysqli_query($conn, $sql);
		$total = 0;
		while($price = mysqli_fetch_assoc($result))
			$total += $price['item_price'];

		return $total;
	}

	public function cartqty($id){
		$conn 	= DatabaseHandler::getConn();
		$sql 	= "SELECT qty FROM cart";
		$result = mysqli_query($conn, $sql);
		$total = 0;
		while($qty = mysqli_fetch_assoc($result))
			$total += $qty['qty'];
		return $total;

	}

	public function deleteFromCart($id){
		$conn 	= DatabaseHandler::getConn();
		$sql 	= "DELETE FROM cart WHERE item_id = " .$id;
		$result = mysqli_query($conn, $sql);
		return $result;
	}

	public function addToCart($user_id, $item_id){
		$conn 	= DatabaseHandler::getConn();
		$sql 	= "INSERT INTO cart(user_id,item_id) VALUES(" .$user_id. ', ' .$item_id. ")";
		echo $sql;
		$result = mysqli_query($conn, $sql);
		return $result;
	}

		public function getCounts()
	{
		$conn = DatabaseHandler::getConn();
		$sql = "SELECT * FROM " . static::$tableName;
		$result = mysqli_query($conn, $sql);
		return mysqli_num_rows($result);		
	}

}