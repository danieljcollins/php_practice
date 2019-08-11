<?php
class UserCollection implements ArrayAccess{
	protected $_conn;

	protected $_requiredParams = ['username', 'password', 'email'];

	public function __construct(){
		$user = 'root';
		$pass = '';

		try{
			$_conn = new PDO('mysql:host=localhost;dbname=UserCollection', $user, $pass);
			//foreach($_conn->query('SELECT * FROM Users') as $row){
			//	print_r($row);
			//}
			
			//testing query accuracy for later:
			$username = 'developer';
			$query = "SELECT * FROM Users WHERE username = '${username}'";
			//var_dump($query);

			//foreach($_conn->query("SELECT * FROM Users WHERE username = 'developer'") as $row){//works
			//foreach($_conn->query("SELECT * FROM Users WHERE username = '${username}'") as $row){//work
			foreach($_conn->query($query) as $row){
				print_r($row);
			}

			// test a protected function from within the class:
			$this->_getByUsername('developer');
			$_conn = null;

		} catch (PDOException $e){
			print "Error!: " . $e->getMessage() . "<br/";
			die();
		}			
	}

	protected function _getByUsername($username){
		//$query = "SELECT * FROM Users WHERE username = $username";
		//$ret = $this->_conn->executeQuery($query)->fetch();
		//$ret = $this->_conn->query($query);

		//return $ret;
	}

	// start of methods required by ArrayAccess interface
	public function offsetExists($offset){
		return (bool) $this->_getByUsername($offset);
	}

	public function offsetGet($offset){
		return $this->_getByUsername($offset);
	}

	public function offsetSet($offset, $value){
		if(!is_array($value)){
			throw new Exception('value must be an Array');
		}

		$passed = array_intersect(array_values($this->_requiredParams), array_keys($value));
		if(count($passed) < count($this->_requiredParams)){
			throw new Exception('value must contain at least the following params: ' .
				implode(',', $this->_requiredParams));
		}
		$this->_conn->insert('Users', $value);
	}

	public function offsetUnset($offset){
		if(!is_string($offset)){
			throw new Exception('value must be the username to delete');
		}
		if(!$this->offsetGet($offset)){
			throw new Exception('user not found');
		}
		$this->_conn->delete('Users', ['username' => $offset]);
	}
	// END of methods REQUIRED by ArrayAccess interface
}

$users = new UserCollection();
$users->__construct();

//echo 'test changes to file .php';
/*
var_dump(empty($users['testuser']),isset($users['testuser']));
$users['testuser'] = ['username'] => 'testuser',
	'password' => 'testpassword',
	'email' => 'test@test.com'];
var_dump(empty($users['testuser']), isset($users['testuser']), $users['testuser']);
unset($users['testuser'];
var_dump(empty($users['testuser']), isset($users['testuser']));
 */

				



?>
