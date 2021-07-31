<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel4Model extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel4')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel4', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel4',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel4', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel4', ['id' => $id]);
    }
    
}  
