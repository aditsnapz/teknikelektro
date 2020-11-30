<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel3a4Model extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel3a4')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel3a4', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel3a4',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel3a4', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel3a4', ['id' => $id]);
    }
    
}  
