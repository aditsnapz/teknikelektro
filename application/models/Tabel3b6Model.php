<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel3b6Model extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel3b6')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel3b6', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel3b6',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel3b6', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel3b6', ['id' => $id]);
    }
    
}  
