<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel6a_apsModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel6a_aps')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel6a_aps', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel6a_aps',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel6a_aps', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel6a_aps', ['id' => $id]);
    }
    
}  
