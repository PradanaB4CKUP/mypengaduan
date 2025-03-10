<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_data() {
        // Ambil data dari tabel yang diinginkan, misalnya tabel 'users'
        $query = $this->db->get('kasus');
        return $query->result();
    }
}
?>
