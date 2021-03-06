<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 * @author : krisnadev
	**/
class Mymodel extends CI_Model {


	public function select($table)
	{
		return $this->db->get($table);
	}
	
	public function selectwhere($table,$data)
	{
		return $this->db->get_where($table, $data);
	}
	
	function delete($table,$data)
	{
		$this->db->delete($table, $data);
	}
	
	function update($table,$data,$key)
	{
		$this->db->update($table,$data,$key);
	}

	function insert($table,$data)
	{
		$this->db->insert($table,$data);
	}
        
        public function selectDataById($tableName, $id) {
                $this->db->select('*');
                $this->db->from($tableName);
                $this->db->where('no', $id);
                return $this->db->get();
        } 
}