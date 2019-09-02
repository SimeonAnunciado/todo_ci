<?php 

class Lists extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if(!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('noaccess' , 'Sorry you are not login');
			redirect('home/index');
		}
	}

	public function index(){
		$user_id = $this->session->userdata('user_id');

		// load view and layout
		$data['list'] = $this->list_model->get_lists();	
		$data['main_content'] = 'lists/index';
		$this->load->view('layouts/main',$data);

	}

	public function show($id){
		$data['list'] = $this->list_model->get_list($id);	
		$data['main_content'] = 'lists/show';
		$this->load->view('layouts/main',$data);

	}

	public function add(){
		$this->form_validation->set_rules('list_name' , 'List Name' , 'trim|required');
		$this->form_validation->set_rules('list_body' , 'List body' , 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			// error
			$data['main_content'] = 'lists/add_list';
			$this->load->view('layouts/main',$data);
		}else{

			$data = array(
					'list_name' => $this->input->post('list_name'),
					'list_body' => $this->input->post('list_body'),
					'user_id' => $this->session->userdata('user_id')
					);

			if($this->list_model->create_list($data)){
				$this->session->set_flashdata('list_created' , 'success');
				redirect('lists/index');
			}
		}
	}

	public function edit_list($id){
		$this->form_validation->set_rules('list_name' , 'List Name' , 'trim|required');
		$this->form_validation->set_rules('list_body' , 'List body' , 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			// error
			$data['data'] = $this->list_model->get_list_data($id);
			$data['main_content'] = 'lists/edit_list';
			$this->load->view('layouts/main',$data);
		}else{

			$data = array(
				'list_name' => $this->input->post('list_name'),
				'list_body' => $this->input->post('list_body'),
				'user_id' => $this->session->userdata('user_id')
			);

			if($this->list_model->edit_list($id,$data)){
				$this->session->set_flashdata('list_created' , 'success update');
				redirect('lists/index');
			}
		}
	}

	public function delete($id){
		if($this->list_model->delete_model($id)){
			$this->session->set_flashdata('list_created' , 'success delete');
			redirect('lists/index');
		}


	}




}

?>