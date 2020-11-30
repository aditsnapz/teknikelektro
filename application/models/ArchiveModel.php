<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class ArchiveModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('archive')->result();
    }

    public function insert($data)
    {
        $this->db->insert('archive', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('archive', $data);
    }

    public function delete($id)
    {
        $this->db->delete('archive', ['id' => $id]);
    }
    
}  
