<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <?= $this->session->flashdata('message'); ?>
      <form action="<?= base_url('pieces/editSkalaLikert/') . $likertid['id']; ?>" method="post">
        <input type="text" value="<?= $likertid['id']; ?>" name="id" id="id">
        <div class="form-group">
          <label for="">Jawaban</label>
          <input type="text" class="form-control" id="jawaban" name="jawaban" value="<?= $likertid['jawaban']; ?>">
          <?= form_error('jawaban', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="">Kriteria</label>
          <input type="text" class="form-control" id="kriteria" name="kriteria" value="<?= $likertid['kriteria']; ?>">
          <?= form_error('kriteria', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="">Skor</label>
          <input type="text" class="form-control" id="skor" name="skor" value="<?= $likertid['skor']; ?>">
          <?= form_error('skor', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Edit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->