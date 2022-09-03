<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>
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
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td>Skor</td>
            <td></td>
            <td></td>
            <td><?= $skor1; ?></td>
            <td><?= $skor2; ?></td>
            <td><?= $skor3; ?></td>
            <td><?= $skor4; ?></td>
            <td><?= $skor5; ?></td>
          </tr>
          <?php $i = 1; ?>
          <?php foreach ($join1 as $alt) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $alt['indikator']; ?></td>
              <td><?= $alt['pertanyaan']; ?></td>
              <td><?= $alt['ss']; ?></td>
              <?php $sumss[] = $alt['ss'] ?>
              <?php $arraysumss = array_sum($sumss) ?>
              <td><?= $alt['s']; ?></td>
              <?php $sums[] = $alt['s'] ?>
              <?php $arraysums = array_sum($sums) ?>
              <td><?= $alt['rr']; ?></td>
              <?php $sumrr[] = $alt['rr'] ?>
              <?php $arraysumrr = array_sum($sumrr) ?>
              <td><?= $alt['ts']; ?></td>
              <?php $sumts[] = $alt['ts'] ?>
              <?php $arraysumts = array_sum($sumts) ?>
              <td><?= $alt['sts']; ?></td>
              <?php $sumsts[] = $alt['sts'] ?>
              <?php $arraysumsts = array_sum($sumsts) ?>
              <td>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
          <tr>
            <td>Jumlah</td>
            <td></td>
            <td></td>
            <td><?= $arraysumss; ?></td>
            <td><?= $arraysums; ?></td>
            <td><?= $arraysumrr; ?></td>
            <td><?= $arraysumts; ?></td>
            <td><?= $arraysumsts; ?></td>
          </tr>
          <tr>
            <td>Rata-rata kepuasan</td>
            <?php
            $rk = ($arraysumss * $skor1) + ($arraysums * $skor2) + ($arraysumrr * $skor3) + ($arraysumts * $skor4) + ($arraysumsts * $skor5);
            $totalParticipanss = $arraysumss + $arraysums + $arraysumrr + $arraysumts + $arraysumsts;
            $rkss = $rk / $totalParticipanss;
            ?>
            <td><?= $rk; ?> / <?= $totalParticipanss; ?></td>
            <td>=</td>
            <td><?= $rkss; ?></td>
            <td><?php if ($rkss <= 1.79) {
                  echo "Sangat Tidak Puas";
                } elseif ($rkss <= 2.59) {
                  echo "Tidak Puas";
                } elseif ($rkss <= 3.39) {
                  echo "Ragi-ragu";
                } elseif ($rkss <= 4.91) {
                  echo "puas";
                } elseif ($rkss <= 5) {
                  echo "Sangat Puas";
                } ?></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <br><br><br>
  <div class="row mt-3">
    <div class="col-lg-6">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>
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
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td>Skor</td>
            <td></td>
            <td></td>
            <td><?= $skor1; ?></td>
            <td><?= $skor2; ?></td>
            <td><?= $skor3; ?></td>
            <td><?= $skor4; ?></td>
            <td><?= $skor5; ?></td>
          </tr>
          <?php $i = 1; ?>
          <?php foreach ($join2 as $alt) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $alt['indikator']; ?></td>
              <td><?= $alt['pertanyaan']; ?></td>
              <td><?= $alt['ss']; ?></td>
              <?php $sumssinfo[] = $alt['ss'] ?>
              <?php $arraysumssinfo = array_sum($sumssinfo) ?>
              <td><?= $alt['s']; ?></td>
              <?php $sumsinfo[] = $alt['s'] ?>
              <?php $arraysumsinfo = array_sum($sumsinfo) ?>
              <td><?= $alt['rr']; ?></td>
              <?php $sumrrinfo[] = $alt['rr'] ?>
              <?php $arraysumrrinfo = array_sum($sumrrinfo) ?>
              <td><?= $alt['ts']; ?></td>
              <?php $sumtsinfo[] = $alt['ts'] ?>
              <?php $arraysumtsinfo = array_sum($sumtsinfo) ?>
              <td><?= $alt['sts']; ?></td>
              <?php $sumstsinfo[] = $alt['sts'] ?>
              <?php $arraysumstsinfo = array_sum($sumstsinfo) ?>
              <td>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
          <tr>
            <td>Jumlah</td>
            <td></td>
            <td></td>
            <td><?= $arraysumssinfo; ?></td>
            <td><?= $arraysumsinfo; ?></td>
            <td><?= $arraysumrrinfo; ?></td>
            <td><?= $arraysumtsinfo; ?></td>
            <td><?= $arraysumstsinfo; ?></td>
          </tr>
          <tr>
            <td>Rata-rata kepuasan</td>
            <?php
            $rkinfo = ($arraysumssinfo * $skor1) + ($arraysumsinfo * $skor2) + ($arraysumrrinfo * $skor3) + ($arraysumtsinfo * $skor4) + ($arraysumstsinfo * $skor5);
            $totalParticipanssinfo = $arraysumssinfo + $arraysumsinfo + $arraysumrrinfo + $arraysumtsinfo + $arraysumstsinfo;
            $rkssinfo = $rkinfo / $totalParticipanssinfo;
            ?>
            <td><?= $rkinfo; ?> / <?= $totalParticipanssinfo; ?></td>
            <td>=</td>
            <td><?= $rkssinfo; ?></td>
            <td><?php if ($rkss <= 1.79) {
                  echo "Sangat Tidak Puas";
                } elseif ($rkss <= 2.59) {
                  echo "Tidak Puas";
                } elseif ($rkss <= 3.39) {
                  echo "Ragi-ragu";
                } elseif ($rkss <= 4.91) {
                  echo "puas";
                } elseif ($rkss <= 5) {
                  echo "Sangat Puas";
                } ?></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <br><br><br>
  <div class="row mt-3">
    <div class="col-lg-6">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>
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
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td>Skor</td>
            <td></td>
            <td></td>
            <td><?= $skor1; ?></td>
            <td><?= $skor2; ?></td>
            <td><?= $skor3; ?></td>
            <td><?= $skor4; ?></td>
            <td><?= $skor5; ?></td>
          </tr>
          <?php $i = 1; ?>
          <?php foreach ($join4 as $alt) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $alt['indikator']; ?></td>
              <td><?= $alt['pertanyaan']; ?></td>
              <td><?= $alt['ss']; ?></td>
              <?php $sumsseco[] = $alt['ss'] ?>
              <?php $arraysumsseco = array_sum($sumsseco) ?>
              <td><?= $alt['s']; ?></td>
              <?php $sumseco[] = $alt['s'] ?>
              <?php $arraysumseco = array_sum($sumseco) ?>
              <td><?= $alt['rr']; ?></td>
              <?php $sumrreco[] = $alt['rr'] ?>
              <?php $arraysumrreco = array_sum($sumrreco) ?>
              <td><?= $alt['ts']; ?></td>
              <?php $sumtseco[] = $alt['ts'] ?>
              <?php $arraysumtseco = array_sum($sumtseco) ?>
              <td><?= $alt['sts']; ?></td>
              <?php $sumstseco[] = $alt['sts'] ?>
              <?php $arraysumstseco = array_sum($sumstseco) ?>
              <td>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
          <tr>
            <td>Jumlah</td>
            <td></td>
            <td></td>
            <td><?= $arraysumsseco; ?></td>
            <td><?= $arraysumseco; ?></td>
            <td><?= $arraysumrreco; ?></td>
            <td><?= $arraysumtseco; ?></td>
            <td><?= $arraysumstseco; ?></td>
          </tr>
          <tr>
            <td>Rata-rata kepuasan</td>
            <?php
            $rkeco = ($arraysumsseco * $skor1) + ($arraysumseco * $skor2) + ($arraysumrreco * $skor3) + ($arraysumtseco * $skor4) + ($arraysumstseco * $skor5);
            $totalParticipansseco = $arraysumsseco + $arraysumseco + $arraysumrreco + $arraysumtseco + $arraysumstseco;
            $rksseco = $rkeco / $totalParticipansseco;
            ?>
            <td><?= $rkeco; ?> / <?= $totalParticipansseco; ?></td>
            <td>=</td>
            <td><?= $rksseco; ?></td>
            <td><?php if ($rkss <= 1.79) {
                  echo "Sangat Tidak Puas";
                } elseif ($rkss <= 2.59) {
                  echo "Tidak Puas";
                } elseif ($rkss <= 3.39) {
                  echo "Ragi-ragu";
                } elseif ($rkss <= 4.91) {
                  echo "puas";
                } elseif ($rkss <= 5) {
                  echo "Sangat Puas";
                } ?></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <br><br><br>
  <div class="row mt-3">
    <div class="col-lg-6">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>
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
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td>Skor</td>
            <td></td>
            <td></td>
            <td><?= $skor1; ?></td>
            <td><?= $skor2; ?></td>
            <td><?= $skor3; ?></td>
            <td><?= $skor4; ?></td>
            <td><?= $skor5; ?></td>
          </tr>
          <?php $i = 1; ?>
          <?php foreach ($join5 as $alt) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $alt['indikator']; ?></td>
              <td><?= $alt['pertanyaan']; ?></td>
              <td><?= $alt['ss']; ?></td>
              <?php $sumsscon[] = $alt['ss'] ?>
              <?php $arraysumsscon = array_sum($sumsscon) ?>
              <td><?= $alt['s']; ?></td>
              <?php $sumscon[] = $alt['s'] ?>
              <?php $arraysumscon = array_sum($sumscon) ?>
              <td><?= $alt['rr']; ?></td>
              <?php $sumrrcon[] = $alt['rr'] ?>
              <?php $arraysumrrcon = array_sum($sumrrcon) ?>
              <td><?= $alt['ts']; ?></td>
              <?php $sumtscon[] = $alt['ts'] ?>
              <?php $arraysumtscon = array_sum($sumtscon) ?>
              <td><?= $alt['sts']; ?></td>
              <?php $sumstscon[] = $alt['sts'] ?>
              <?php $arraysumstscon = array_sum($sumstscon) ?>
              <td>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
          <tr>
            <td>Jumlah</td>
            <td></td>
            <td></td>
            <td><?= $arraysumsscon; ?></td>
            <td><?= $arraysumscon; ?></td>
            <td><?= $arraysumrrcon; ?></td>
            <td><?= $arraysumtscon; ?></td>
            <td><?= $arraysumstscon; ?></td>
          </tr>
          <tr>
            <td>Rata-rata kepuasan</td>
            <?php
            $rkcon = ($arraysumsscon * $skor1) + ($arraysumscon * $skor2) + ($arraysumrrcon * $skor3) + ($arraysumtscon * $skor4) + ($arraysumstscon ** $skor5);
            $totalParticipansscon = $arraysumsscon + $arraysumscon + $arraysumrrcon + $arraysumtscon + $arraysumstscon;
            $rksscon = $rkcon / $totalParticipansscon;
            ?>
            <td><?= $rkcon; ?> / <?= $totalParticipansscon; ?></td>
            <td>=</td>
            <td><?= $rksscon; ?></td>
            <td><?php if ($rkss <= 1.79) {
                  echo "Sangat Tidak Puas";
                } elseif ($rkss <= 2.59) {
                  echo "Tidak Puas";
                } elseif ($rkss <= 3.39) {
                  echo "Ragi-ragu";
                } elseif ($rkss <= 4.91) {
                  echo "puas";
                } elseif ($rkss <= 5) {
                  echo "Sangat Puas";
                } ?></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <br><br><br>
  <div class="row mt-3">
    <div class="col-lg-6">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>
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
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td>Skor</td>
            <td></td>
            <td></td>
            <td><?= $skor1; ?></td>
            <td><?= $skor2; ?></td>
            <td><?= $skor3; ?></td>
            <td><?= $skor4; ?></td>
            <td><?= $skor5; ?></td>
          </tr>
          <?php $i = 1; ?>
          <?php foreach ($join6 as $alt) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $alt['indikator']; ?></td>
              <td><?= $alt['pertanyaan']; ?></td>
              <td><?= $alt['ss']; ?></td>
              <?php $sumsseff[] = $alt['ss'] ?>
              <?php $arraysumsseff = array_sum($sumsseff) ?>
              <td><?= $alt['s']; ?></td>
              <?php $sumseff[] = $alt['s'] ?>
              <?php $arraysumseff = array_sum($sumseff) ?>
              <td><?= $alt['rr']; ?></td>
              <?php $sumrreff[] = $alt['rr'] ?>
              <?php $arraysumrreff = array_sum($sumrreff) ?>
              <td><?= $alt['ts']; ?></td>
              <?php $sumtseff[] = $alt['ts'] ?>
              <?php $arraysumtseff = array_sum($sumtseff) ?>
              <td><?= $alt['sts']; ?></td>
              <?php $sumstseff[] = $alt['sts'] ?>
              <?php $arraysumstseff = array_sum($sumstseff) ?>
              <td>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
          <tr>
            <td>Jumlah</td>
            <td></td>
            <td></td>
            <td><?= $arraysumsseff; ?></td>
            <td><?= $arraysumseff; ?></td>
            <td><?= $arraysumrreff; ?></td>
            <td><?= $arraysumtseff; ?></td>
            <td><?= $arraysumstseff; ?></td>
          </tr>
          <tr>
            <td>Rata-rata kepuasan</td>
            <?php
            $rkeff = ($arraysumsseff * $skor1) + ($arraysumseff * $skor2) + ($arraysumrreff * $skor3) + ($arraysumtseff * $skor4) + ($arraysumstseff ** $skor5);
            $totalParticipansseff = $arraysumsseff + $arraysumseff + $arraysumrreff + $arraysumtseff + $arraysumstseff;
            $rksseff = $rkeff / $totalParticipansseff;
            ?>
            <td><?= $rkeff; ?> / <?= $totalParticipansseff; ?></td>
            <td>=</td>
            <td><?= $rksseff; ?></td>
            <td><?php if ($rkss <= 1.79) {
                  echo "Sangat Tidak Puas";
                } elseif ($rkss <= 2.59) {
                  echo "Tidak Puas";
                } elseif ($rkss <= 3.39) {
                  echo "Ragi-ragu";
                } elseif ($rkss <= 4.91) {
                  echo "puas";
                } elseif ($rkss <= 5) {
                  echo "Sangat Puas";
                } ?></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <br><br><br>
  <div class="row mt-3">
    <div class="col-lg-6">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>
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
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td>Skor</td>
            <td></td>
            <td></td>
            <td><?= $skor1; ?></td>
            <td><?= $skor2; ?></td>
            <td><?= $skor3; ?></td>
            <td><?= $skor4; ?></td>
            <td><?= $skor5; ?></td>
          </tr>
          <?php $i = 1; ?>
          <?php foreach ($join7 as $alt) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $alt['indikator']; ?></td>
              <td><?= $alt['pertanyaan']; ?></td>
              <td><?= $alt['ss']; ?></td>
              <?php $sumssser[] = $alt['ss'] ?>
              <?php $arraysumssser = array_sum($sumssser) ?>
              <td><?= $alt['s']; ?></td>
              <?php $sumsser[] = $alt['s'] ?>
              <?php $arraysumsser = array_sum($sumsser) ?>
              <td><?= $alt['rr']; ?></td>
              <?php $sumrrser[] = $alt['rr'] ?>
              <?php $arraysumrrser = array_sum($sumrrser) ?>
              <td><?= $alt['ts']; ?></td>
              <?php $sumtsser[] = $alt['ts'] ?>
              <?php $arraysumtsser = array_sum($sumtsser) ?>
              <td><?= $alt['sts']; ?></td>
              <?php $sumstsser[] = $alt['sts'] ?>
              <?php $arraysumstsser = array_sum($sumstsser) ?>
              <td>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
          <tr>
            <td>Jumlah</td>
            <td></td>
            <td></td>
            <td><?= $arraysumssser; ?></td>
            <td><?= $arraysumsser; ?></td>
            <td><?= $arraysumrrser; ?></td>
            <td><?= $arraysumtsser; ?></td>
            <td><?= $arraysumstsser; ?></td>
          </tr>
          <tr>
            <td>Rata-rata kepuasan</td>
            <?php
            $rkser = ($arraysumssser * $skor1) + ($arraysumsser * $skor2) + ($arraysumrrser * $skor3) + ($arraysumtsser * $skor4) + ($arraysumstsser ** $skor5);
            $totalParticipanssser = $arraysumssser + $arraysumsser + $arraysumrrser + $arraysumtsser + $arraysumstsser;
            $rkssser = $rkser / $totalParticipanssser;
            ?>
            <td><?= $rkser; ?> / <?= $totalParticipanssser; ?></td>
            <td>=</td>
            <td><?= $rkssser; ?></td>
            <td><?php if ($rkss <= 1.79) {
                  echo "Sangat Tidak Puas";
                } elseif ($rkss <= 2.59) {
                  echo "Tidak Puas";
                } elseif ($rkss <= 3.39) {
                  echo "Ragi-ragu";
                } elseif ($rkss <= 4.91) {
                  echo "puas";
                } elseif ($rkss <= 5) {
                  echo "Sangat Puas";
                } ?></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>