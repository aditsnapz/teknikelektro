<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class PerumahanModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('perumahan')->result();
    }

    public function insert($data)
    {
        $this->db->insert('perumahan', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('perumahan', $data);
    }

    public function delete($id)
    {
        $this->db->delete('perumahan', ['id' => $id]);
    }
    
}  