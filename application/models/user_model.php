<?php 

class User_model extends CI_Model{
	public function create_member(){
		$user_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$query = $this->db->insert('users',$user_data);
		return $query;

	}

	public function login_user($username,$password){

		$encrypt_pass = md5($password);
		// where clause

		$this->db->where('username',$username);
		$this->db->where('password',$encrypt_pass);

		$result = $this->db->get('users');

		if ($result->num_rows() == 1 ) {
			return $result->row(0)->id;
		}else{
			return false;
		}

	}
}

?>