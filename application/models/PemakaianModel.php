<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class PemakaianModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('pemakaian')->result();
    }

    public function insert($data)
    {
        $this->db->insert('pemakaian', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('pemakaian', $data);
    }

    public function delete($id)
    {
        $this->db->delete('pemakaian', ['id' => $id]);
    }
    
}  
