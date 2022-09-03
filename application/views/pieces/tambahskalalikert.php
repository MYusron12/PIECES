<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <?= $this->session->flashdata('message'); ?>
      <form action="<?= base_url('pieces/tambahSkalaLikert'); ?>" method="post">
        <input type="hidden" name="urutan" value="<?= $idskala; ?>">
        <div class="form-group">
          <label for="">Jawaban</label>
          <input type="text" class="form-control" id="jawaban" name="jawaban">
          <?= form_error('jawaban', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="">Kriteria</label>
          <input type="text" class="form-control" id="kriteria" name="kriteria">
          <?= form_error('kriteria', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="">Skor</label>
          <input type="text" class="form-control" id="skor" name="skor">
          <?= form_error('skor', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->