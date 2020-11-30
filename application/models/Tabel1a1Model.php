<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel1a1Model extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel1a1')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel1a1', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel1a1',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel1a1', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel1a1', ['id' => $id]);
    }
    
}  
