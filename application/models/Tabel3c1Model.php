<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel3c1Model extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel3c1')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel3c1', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel3c1',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel3c1', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel3c1', ['id' => $id]);
    }
    
}  
