<?PHP
	class core{
		final public function __construct(){
			global $_CONFIG;
			if($_CONFIG['site']['maintenance']){
				$this->redirect("maintenance");
			}
		}
	}
?>