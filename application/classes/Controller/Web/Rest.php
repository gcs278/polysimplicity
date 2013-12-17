<?php

defined('SYSPATH') or die('No direct script access.');

class Candidates_api extends Controller_Web_Containers_Default {
	
	public function action_candidates() {
		if ($this->request->is_ajax() {
			if (isset($_GET['term'])) {
				echo json_encode(array("Hello"));
			}
		}
	}
}