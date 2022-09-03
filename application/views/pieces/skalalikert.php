<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>
      <a href="<?= base_url('pieces/tambahskalalikert'); ?>" class="btn btn-primary mb-3">Tambah Skala Likert</a>
      <table class="table table-hover" id="dataTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Jawaban</th>
            <th scope="col">Kriteria</th>
            <th scope="col">Skor</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($likert as $alt) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $alt['jawaban']; ?></td>
              <td><?= $alt['kriteria']; ?></td>
              <td><?= $alt['skor']; ?></td>
              <td>
                <a href="<?= base_url('pieces/editSkalaLikert/') . $alt['id']; ?>" class="badge badge-success">edit</a>
                <a href="<?= base_url('pieces/hapusSkalaLikert/') . $alt['id']; ?>" class="badge badge-danger" onclick="return confirm('apakah akan dihapus?')">delete</a>
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