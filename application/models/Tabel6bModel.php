<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel6bModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel6b')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel6b', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel6b',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel6b', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel6b', ['id' => $id]);
    }
    
}  
