<?php
class View {

	public function load($viewfile, $data = array()) {
		require_once APP.'templates/'.$viewfile.'.php';
	}

}
?>