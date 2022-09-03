<?php

use phpDocumentor\Reflection\Types\This;

defined('BASEPATH') or exit('No direct script access allowed');

class Pieces extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pieces_model', 'pieces');
    if (!$this->session->userdata('email')) {
      redirect('auth');
    }
  }

  public function index()
  {
    $data['title'] = 'Dashboard PIECES';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('pieces/index', $data);
    $this->load->view('templates/footer', $data);
  }

  #skala likert
  public function skalaLikert()
  {
    $data['title'] = 'Skala Likert';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['likert'] = $this->db->get('pieces_skala_likert')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('pieces/skalalikert', $data);
    $this->load->view('templates/footer', $data);
  }
  public function tambahSkalaLikert()
  {
    $data['title'] = 'Tambah Skala Likert';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $count = $this->pieces->idSkala();
    foreach ($count as $row) {
      $data['idskala'] = $row->urutan;
    }
    $this->form_validation->set_rules('jawaban', 'Jawaban', 'required|is_unique[pieces_skala_likert.jawaban]');
    $this->form_validation->set_rules('kriteria', 'Kriteria', 'required|is_unique[pieces_skala_likert.kriteria]');
    $this->form_validation->set_rules('skor', 'Skor', 'required|is_unique[pieces_skala_likert.skor]');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('pieces/tambahskalalikert', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $data = [
        'jawaban' => $this->input->post('jawaban'),
        'kriteria' => $this->input->post('kriteria'),
        'skor' => $this->input->post('skor'),
        'urutan' => $this->input->post('urutan')
      ];
      $this->db->insert('pieces_skala_likert', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Skala Likert berhasil ditambah</div>');
      redirect('pieces/skalaLikert');
    }
  }
  public function editSkalaLikert($id)
  {
    $data['title'] = 'Edit Skala Likert';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['likertid'] = $this->db->get_where('pieces_skala_likert', ['id' => $id])->row_array();
    $this->form_validation->set_rules('jawaban', 'Jawaban', 'required');
    $this->form_validation->set_rules('kriteria', 'Kriteria', 'required');
    $this->form_validation->set_rules('skor', 'Skor', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('pieces/editskalalikert', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $data = [
        'jawaban' => $this->input->post('jawaban'),
        'kriteria' => $this->input->post('kriteria'),
        'skor' => $this->input->post('skor')
      ];
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('pieces_skala_likert', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Skala Likert berhasil diubah</div>');
      redirect('pieces/skalaLikert');
    }
  }
  public function hapusSkalaLikert($id)
  {
    $this->db->delete('pieces_skala_likert', ['id' => $id]);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Skala Likert berhasil dihapus</div>');
    redirect('pieces/skalaLikert');
  }

  #pieces framework
  public function framework()
  {
    $data['title'] = 'Pieces Framework';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['piecesframework'] = $this->db->get('pieces_framework')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('pieces/piecesframework', $data);
    $this->load->view('templates/footer', $data);
  }
  public function tambahFramework()
  {
    $data['title'] = 'Tambah Pieces Framework';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('indikator', 'Indikator', 'required|is_unique[pieces_framework.indikator]');
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|is_unique[pieces_framework.keterangan]');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('pieces/tambahpiecesframework', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $data = [
        'indikator' => $this->input->post('indikator'),
        'keterangan' => $this->input->post('keterangan')
      ];
      $this->db->insert('pieces_framework', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pieces Framework berhasil ditambah</div>');
      redirect('pieces/framework');
    }
  }
  public function editFramework($id)
  {
    $data['title'] = 'Edit Pieces Framework';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['fmid'] = $this->db->get_where('pieces_framework', ['id' => $id])->row_array();
    $this->form_validation->set_rules('indikator', 'Indikator', 'required');
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('pieces/editpiecesframework', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $data = [
        'indikator' => $this->input->post('indikator'),
        'keterangan' => $this->input->post('keterangan')
      ];
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('pieces_framework', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pieces Framework berhasil diubah</div>');
      redirect('pieces/framework');
    }
  }
  public function hapusFramework($id)
  {
    $this->db->delete('pieces_framework', ['id' => $id]);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pieces Framework berhasil dihapus</div>');
    redirect('pieces/framework');
  }

  #indikator pertanyaa
  public function indikatorPerformance()
  {
    $data['title'] = 'Indikator Performance';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['indikatorperformance'] = $this->db->get('pieces_indikator_performance')->result_array();
    $data['join'] = $this->pieces->joinIndikator();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('pieces/indikator', $data);
    $this->load->view('templates/footer', $data);
  }
  public function tambahIndikatorPerformance()
  {
    $data['title'] = 'Tambah Indikator Performance';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['framework'] = $this->db->get('pieces_framework')->result_array();
    $this->form_validation->set_rules('pieces_framework_id', 'Pieces Framework', 'required');
    $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
    $this->form_validation->set_rules('ss', 'Sangat Setuju', 'required');
    $this->form_validation->set_rules('s', 'Setuju', 'required');
    $this->form_validation->set_rules('rr', 'Ragu-ragu', 'required');
    $this->form_validation->set_rules('ts', 'Tidak Setuju', 'required');
    $this->form_validation->set_rules('sts', 'Sangat Tidak Setuju', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('pieces/tambahindikator', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $data = [
        'pieces_framework_id' => $this->input->post('pieces_framework_id'),
        'pertanyaan' => $this->input->post('pertanyaan'),
        'ss' => $this->input->post('ss'),
        's' => $this->input->post('s'),
        'rr' => $this->input->post('rr'),
        'ts' => $this->input->post('ts'),
        'sts' => $this->input->post('sts')
      ];
      $this->db->insert('pieces_indikator_performance', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pieces Indikator berhasil ditambah</div>');
      redirect('pieces/indikatorPerformance');
    }
  }
  public function editIndikatorPerformance($id)
  {
    $data['title'] = 'Tambah Indikator Performance';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['indikatorid'] = $this->db->get_where('pieces_indikator_performance', ['id' => $id])->row_array();
    $data['framework'] = $this->db->get('pieces_framework')->result_array();
    $this->form_validation->set_rules('pieces_framework_id', 'Pieces Framework', 'required');
    $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
    $this->form_validation->set_rules('ss', 'Sangat Setuju', 'required');
    $this->form_validation->set_rules('s', 'Setuju', 'required');
    $this->form_validation->set_rules('rr', 'Ragu-ragu', 'required');
    $this->form_validation->set_rules('ts', 'Tidak Setuju', 'required');
    $this->form_validation->set_rules('sts', 'Sangat Tidak Setuju', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('pieces/editindikator', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $data = [
        'pieces_framework_id' => $this->input->post('pieces_framework_id'),
        'pertanyaan' => $this->input->post('pertanyaan'),
        'ss' => $this->input->post('ss'),
        's' => $this->input->post('s'),
        'rr' => $this->input->post('rr'),
        'ts' => $this->input->post('ts'),
        'sts' => $this->input->post('sts')
      ];
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('pieces_indikator_performance', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pieces Indikator berhasil ditambah</div>');
      redirect('pieces/indikatorPerformance');
    }
  }
  public function hapusIndikatorPerformance($id)
  {
    $this->db->delete('pieces_indikator_performance', ['id' => $id]);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Skala Likert berhasil dihapus</div>');
    redirect('pieces/indikatorPerformance');
  }

  public function ratarata()
  {
    $data['title'] = 'Dashboard PIECES';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['indikatorperformance'] = $this->db->get('pieces_indikator_performance')->result_array();
    $data['join1'] = $this->pieces->joinIndikatorid(1);
    $data['join2'] = $this->pieces->joinIndikatorid(3);
    $data['join4'] = $this->pieces->joinIndikatorid(4);
    $data['join5'] = $this->pieces->joinIndikatorid(5);
    $data['join6'] = $this->pieces->joinIndikatorid(6);
    $data['join7'] = $this->pieces->joinIndikatorid(7);
    $urutan1 = $this->pieces->urut(1);
    foreach ($urutan1 as $row) {
      $data['skor1'] = $row->skor;
    }
    $urutan2 = $this->pieces->urut(2);
    foreach ($urutan2 as $row) {
      $data['skor2'] = $row->skor;
    }
    $urutan3 = $this->pieces->urut(3);
    foreach ($urutan3 as $row) {
      $data['skor3'] = $row->skor;
    }
    $urutan4 = $this->pieces->urut(4);
    foreach ($urutan4 as $row) {
      $data['skor4'] = $row->skor;
    }
    $urutan5 = $this->pieces->urut(5);
    foreach ($urutan5 as $row) {
      $data['skor5'] = $row->skor;
    }
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('pieces/ratarata', $data);
    $this->load->view('templates/footer', $data);
  }
}
