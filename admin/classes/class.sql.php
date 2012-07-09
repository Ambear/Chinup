<?PHP
	class SQL{
		final public function __construct(){
			global $_CONFIG;
			$this->connectSQL("", "", "");
			$this->selectDB($_CONFIG['sql']['database']);
		}
		private function connectSQL($host, $user, $password){
			mysql_connect($host, $user, $password);
		}
		private function selectDB($db){
			mysql_select_db($db);
		}
	}
?>