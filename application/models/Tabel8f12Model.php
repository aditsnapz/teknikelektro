<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel8f12Model extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel8f12')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel8f12', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel8f12',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel8f12', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel8f12', ['id' => $id]);
    }
    
}  
