<?php
class Image_model extends CI_Model {
  public function get_images() {
    return $this->db->get('images')->result_array();
  }

  public function insert_image($data) {
    return $this->db->insert('images', $data);
  }

  public function get_image($id) {
    return $this->db->get_where('images', array('id' => $id))->row_array();
  }

  public function update_image($id, $data) {
    $this->db->where('id', $id);
    return $this->db->update('images', $data);
  }

  public function delete_image($id) {
    $this->db->where('id', $id);
    return $this->db->delete('images');
  }
}
