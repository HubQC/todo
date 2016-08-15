interface DataAccessObject {
	public function save_user_object();
	public function get_user_array();	
}

class JsonDataAccessObject implements DataAccessObject {
	public function save_user_object(){};
	public function get_user_array(){};
}

class MySQLDataAccessObject extends DataAccessObject {


	private function getConnection(){
		get_handle();
	}

	private function getUserTable(){

	}

	public function save_user_object{
		getUserTable();
		save();
	}
}


$jsonDao = new JsonDataAccessObject();
$mysqlDao = new MySQLDataAccessObject();

$jsonDao->save_user_object();
$mysqlDao->save_user_object();

$mysqlDao->get_handle();//error