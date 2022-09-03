<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>
      <a href="<?= base_url('pieces/tambahIndikatorPerformance'); ?>" class="btn btn-primary mb-3">Tambah Indikator Performance</a>
      <table class="table table-hover" id="dataTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Framework</th>
            <th scope="col">Pertanyaan</th>
            <th>Sangat Setuju</th>
            <th>Setuju</th>
            <th>Ragu-ragu</th>
            <th>Tidak Setuju</th>
            <th>Sangat Tidak Setuju</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($join as $alt) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $alt['indikator']; ?></td>
              <td><?= $alt['pertanyaan']; ?></td>
              <td><?= $alt['ss']; ?></td>
              <td><?= $alt['s']; ?></td>
              <td><?= $alt['rr']; ?></td>
              <td><?= $alt['ts']; ?></td>
              <td><?= $alt['sts']; ?></td>
              <td>
                <a href="<?= base_url('pieces/editIndikatorPerformance/') . $alt['id']; ?>" class="badge badge-success">edit</a>
                <a href="<?= base_url('pieces/hapusIndikatorPerformance/') . $alt['id']; ?>" class="badge badge-danger" onclick="return confirm('apakah akan dihapus?')">delete</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>