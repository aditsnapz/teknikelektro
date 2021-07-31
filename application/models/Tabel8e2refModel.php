<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tabel8e2refModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('tabel8e2ref')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tabel8e2ref', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('tabel8e2ref',$data);
	}

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tabel8e2ref', $data);
    }

    public function delete($id)
    {
        $this->db->delete('tabel8e2ref', ['id' => $id]);
    }
    
}  
