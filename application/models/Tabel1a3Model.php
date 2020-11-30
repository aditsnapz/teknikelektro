<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel1a3Model extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel1a3')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel1a3', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel1a3',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel1a3', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel1a3', ['id' => $id]);
    }
    
}  
