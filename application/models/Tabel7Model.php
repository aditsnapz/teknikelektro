<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel7Model extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel7')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel7', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel7',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel7', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel7', ['id' => $id]);
    }
    
}  
