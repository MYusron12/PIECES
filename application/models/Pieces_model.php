<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pieces_model extends CI_Model
{
  public function getData()
  {
    # code...
  }

  public function joinIndikator()
  {
    $query = "select a.*,b.indikator from pieces_indikator_performance a join pieces_framework b on a.pieces_framework_id = b.id";
    return $this->db->query($query)->result_array();
  }
  public function joinIndikatorid($id)
  {
    $query = "select a.*,b.indikator from pieces_indikator_performance a join pieces_framework b on a.pieces_framework_id = b.id where pieces_framework_id=$id";
    return $this->db->query($query)->result_array();
  }
  public function idSkala()
  {
    $query = "select count(id)+1 as urutan from pieces_skala_likert";
    return $this->db->query($query)->result();
  }

  public function urut($id)
  {
    $query = "select skor from pieces_skala_likert where urutan=$id";
    return $this->db->query($query)->result();
  }
}
