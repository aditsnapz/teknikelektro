<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class AnnouncementModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('announcement')->result();
	}
	
	public function show_page($limit,$start)
    {
		$this->db->limit($limit,$start);
        $this->db->select('*');
        return $this->db->get('announcement')->result();
    }

    public function insert($data)
    {
        $this->db->insert('announcement', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('announcement', $data);
    }

    public function delete($id)
    {
        $this->db->delete('announcement', ['id' => $id]);
    }
    
}  
