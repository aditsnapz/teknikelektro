<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel13Model extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel13')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel13', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel13',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel13', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel13', ['id' => $id]);
    }
    
}  
