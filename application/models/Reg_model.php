<?php
class Reg_model extends CI_Model
{
    public function create($formArray)
    {
	   $this->db->insert('users', $formArray);
    }
    public function create1($formArray1)
    {
	   $this->db->insert('posts', $formArray1);
    }
    public function checkUser($email)
    {
        $this->db->where('email',$email);
        return $row = $this->db->get('users')->row_array();
    }
}