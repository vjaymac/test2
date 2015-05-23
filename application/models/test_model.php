<?php
class Test_model extends CI_Model {

    var $t ;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->t = "test";
    }
    
    function get_all()
    {
        $query = $this->db->get($this->t);
        return $query->result();
    }
	
	function get_from_id($id)
    {
		$this->db->where(array("id"=>$id));	
		$this->db->from($this->t);	
        $query = $this->db->get();
        return $query->result();
    }

    function insert_entry($f,$l)
    {
        $data['fname'] = $f; // please read the below note
        $data['lname'] = $l;

        return $this->db->insert($this->t, $data);
    }
	
	function delete_entry($id)
    {
        return $this->db->delete($this->t, array("id"=>$id));
    }

    function update_entry($f,$l,$id)
    {
        $data['fname'] = $f; // please read the below note
        $data['lname'] = $l;
        

        $this->db->update($this->t, $data, array('id' => $id));
    }

}
?>