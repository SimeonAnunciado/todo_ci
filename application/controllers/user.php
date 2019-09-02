<?php 

class User extends CI_Controller{


	public function register(){
		$this->form_validation->set_rules('first_name' , 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name' , 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email' , 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('username' , 'User Name', 'trim|required');
		$this->form_validation->set_rules('password' , 'Password', 'trim|required');
		$this->form_validation->set_rules('password2' , 'Confirm Password', 'trim|required|matches[password]');


		if ($this->form_validation->run() == FALSE) {
			$data['main_content'] = 'users/register';
			$this->load->view('layouts/main',$data);

			
		}else{

			if ($this->user_model->create_member()) {
				$this->session->set_flashdata('response' , 'You are now register you can now login');
				redirect('home/index');
			}else{
				$this->session->set_flashdata('response' , 'Something went wrong');
			}

		}

	}

	public function login(){
		
		$this->form_validation->set_rules('username' ,'User Name', 'trim|required');
		$this->form_validation->set_rules('password' ,'Password', 'trim|required');



		if ($this->form_validation->run() == FALSE) {
			$data['main_content'] = 'users/login';
			$this->load->view('layouts/main',$data);
			
		}else{

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->user_model->login_user($username,$password);

			if ($user_id) {
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true,
				);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('response' , 'Success Log in Welcome!');
				redirect('home/index');
			}else{
				$this->session->set_flashdata('response' , 'Sorry the info that you entered is invalid');
				redirect('home/index');

			}

			

		}

	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect('home/index');
	}
}

?>