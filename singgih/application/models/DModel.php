<?php

class DModel extends CI_Model	

{
    

    private $table ='D_tabel';
    
    public function getall()
    {
        return $this->db->get($this->table)->result();
    }

    public function tambahdata($data_input)
    {
        $this->db->insert($this->table, $data_input);

        
    }
}

?>