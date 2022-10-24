<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class berita_model extends CI_Model {
    public function tampilBerita()
    {  
        $this->db->select('berita.*');
        return $this->db->get('berita')->result();
    }
}
?>