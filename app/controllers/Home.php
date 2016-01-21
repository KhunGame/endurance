<?php
class Home extends Controller {

	public function index() {
		$this->view->load('default/index');
	}

	public function viewtest() {
		$pattern = "<controller:\w+>/<action:\w+>";
		preg_match_all('/<(\w+):?(.*?)?>/',$pattern,$matches);
		print_r($matches);
	}

	public function testagain() {
		echo "test again";
	}

}
?>