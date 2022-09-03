<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <?= $this->session->flashdata('message'); ?>
      <form action="<?= base_url('pieces/tambahIndikatorPerformance'); ?>" method="post">
        <div class="form-group">
          <select name="pieces_framework_id" id="" class="form-control">
            <option value="">Pilih</option>
            <?php foreach ($framework as $fr) : ?>
              <option value="<?= $fr['id']; ?>"><?= $fr['indikator']; ?></option>
            <?php endforeach; ?>
          </select>
          <?= form_error('pieces_framework_id', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="">Pertanyaan</label>
          <input type="text" class="form-control" id="pertanyaan" name="pertanyaan">
          <?= form_error('pertanyaan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="">Sangat Setuju</label>
          <input type="number" class="form-control" id="ss" name="ss">
          <?= form_error('ss', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="">Setuju</label>
          <input type="number" class="form-control" id="s" name="s">
          <?= form_error('s', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="">Ragu-ragu</label>
          <input type="number" class="form-control" id="rr" name="rr">
          <?= form_error('rr', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="">Tidak Setuju</label>
          <input type="number" class="form-control" id="ts" name="ts">
          <?= form_error('ts', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="">Sangat Tidak Setuju</label>
          <input type="number" class="form-control" id="sts" name="sts">
          <?= form_error('sts', '<small class="text-danger pl-3">', '</small>'); ?>
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