<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class ServicesModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('services')->result();
    }

	public function show_id($id)
    {
        $this->db->select('*');
		$this->db->from('services');
		$this->db->where('id',$id);
        return $this->db->get()->result();
    }

    public function insert($data)
    {
        $this->db->insert('services', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('services', $data);
    }

    public function delete($id)
    {
        $this->db->delete('services', ['id' => $id]);
    }
    
}  
