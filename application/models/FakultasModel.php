<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class FakultasModel extends CI_Model
{
    public function show()
    {
		$this->db->select('*');
        return $this->db->get('fakultas')->result();
	}
	
	public function show_id($id)
    {
        $this->db->select('*');
        return $this->db->get_where('fakultas',['id' => $id])->result();
	}

    public function insert($data)
    {
        $this->db->insert('fakultas', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('fakultas', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('fakultas',$data);
	}

    public function delete($id)
    {
        $this->db->delete('fakultas', ['id' => $id]);
    }
    
}  
