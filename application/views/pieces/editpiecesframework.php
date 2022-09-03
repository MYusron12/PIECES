<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <?= $this->session->flashdata('message'); ?>
      <form action="<?= base_url('pieces/editframework/') . $fmid['id']; ?>" method="post">
        <input type="text" name="id" value="<?= $fmid['id']; ?>">
        <div class="form-group">
          <label for="">Indikator</label>
          <input type="text" class="form-control" id="indikator" name="indikator" value="<?= $fmid['indikator']; ?>">
          <?= form_error('indikator', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="">Keterangan</label>
          <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $fmid['keterangan']; ?>">
          <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
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