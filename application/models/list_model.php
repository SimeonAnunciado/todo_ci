<?php 

class List_model extends CI_Model{
	public function get_lists(){
		$query = $this->db->get('lists');
		return $query->result();
	}

	public function get_list($id){

		$query = $this->db->select('*')
				->from('lists')
				->where('id' , $id)
				->get();
		return $query->row();

	}

	public function create_list($data){
		$query = $this->db->insert('lists', $data);
		return $query;
	}

	public function get_list_data($id){

		$query = $this->db->select('*')
				->from('lists')
				->where('id' , $id)
				->get();
		return $query->row();

	}

	public function edit_list($id,$data){
		$query = $this->db->where('id' , $id)
				->update('lists',$data);
				return $query;

	}

	public function delete_model($id){
		$query = $this->db->where('id',$id)
				->delete('lists');
				return $query;
	}


	public function get_my_list($id){
		$query = $this->db->select('*')
		->from('lists')
		->where('id' , $id)
		->get();
		return $query->result();
		
	}
}

?>