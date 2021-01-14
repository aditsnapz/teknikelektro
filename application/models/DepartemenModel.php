<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class DepartemenModel extends CI_Model
{
    public function show()
    {
		$this->db->select('*');
        return $this->db->get('departemen')->result();
	}
	
	public function show_fakultas($fakultas)
    {
		return $this->db->query('SELECT * FROM departemen WHERE fakultas_id='.$fakultas)->result();
	}

	public function show_fakultas_departemen($departemen)
    {
		return $this->db->query('SELECT fakultas_id FROM departemen WHERE nama="'.$departemen.'"')->result();
	}

	public function show_id($id)
    {
        $this->db->select('*');
        return $this->db->get_where('departemen',['id' => $id])->result();
	}

    public function insert($data)
    {
        $this->db->insert('departemen', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('departemen', $data);
	}
	
	public function insert_batch($data)
	{
		$this->db->insert_batch('departemen',$data);
	}

    public function delete($id)
    {
        $this->db->delete('departemen', ['id' => $id]);
    }
    
}  
