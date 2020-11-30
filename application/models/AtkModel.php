<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class AtkModel extends CI_Model
{
    public function show()
    {
		$this->db->select('*');
		$this->db->order_by('sisa', 'ASC');
        return $this->db->get('atk')->result();
	}
	
	public function show_id($id)
    {
        $this->db->select('*');
        return $this->db->get_where('atk',['id' => $id])->result();
	}

    public function insert($data)
    {
        $this->db->insert('atk', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('atk', $data);
    }

    public function delete($id)
    {
        $this->db->delete('atk', ['id' => $id]);
    }
    
}  
