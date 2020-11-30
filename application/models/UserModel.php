<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class UserModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('users')->result();
    }

    public function insert($data)
    {
        $this->db->insert('users', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function delete($id)
    {
        $this->db->delete('users', ['id' => $id]);
    }
    
}  