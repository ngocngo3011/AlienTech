<?php

class View {
	public function __construct() {

	}

	public function get($view, $data=null) {
		if ($data) {
			foreach($data as $key => $_data) {
				${$key} = $_data;
			}
		}
		
		require_once('./views/' . $view .'.php');
	}
}
