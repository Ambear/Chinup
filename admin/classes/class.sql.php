<?PHP
	class SQL{
		final public function __construct(){
			global $_CONFIG;
			$this->connectSQL("", "", "");
			$this->selectDB("");
		}
	}
?>