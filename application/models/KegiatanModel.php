<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class KegiatanModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('kegiatan')->result();
    }

    public function insert($data)
    {
        $this->db->insert('kegiatan', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('kegiatan', $data);
    }

    public function delete($id)
    {
        $this->db->delete('kegiatan', ['id' => $id]);
    }
    
}  
