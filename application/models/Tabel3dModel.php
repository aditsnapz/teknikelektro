<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel3dModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel3d')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel3d', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel3d',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel3d', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel3d', ['id' => $id]);
    }
    
}  
