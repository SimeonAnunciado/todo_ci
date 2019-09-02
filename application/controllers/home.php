<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index(){
		if ($this->session->userdata('logged_in')) {
			$id = $this->session->userdata('user_id');
			$data['my_list'] = $this->list_model->get_my_list($id);
		}
		
		$data['main_content'] = 'users/login';
		$this->load->view('layouts/main', $data);
	}

	
}
