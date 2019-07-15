<nav class="navbar navbar-expand-lg bg-nav fixed-top">
  <a class="navbar-brand" style="margin-left:50px;margin-top:-30px;" href="<?= base_url() ?>user"><img src="<?= base_url() ?>assets/gambar/batan1.png" class="img-brand"></a>
  <div class="row">
    <h4 style="color:#EEE8AA; margin-left:30px;margin-top:10px;">HASIL SEARCH</h4>
    <div class="topnav" style="margin-left:550px;font-size:15px;">
      <a href="<?= base_url() ?>user/index" class="active">Home</a>
      <a href="<?= base_url() ?>user/about">About</a>
      <a href="<?= base_url() ?>user/policies">Policies</a>
      <a href="<?= base_url() ?>user/contact">Contact Us</a>
    </div>
  </div>
  <div style="margin-bottom:100px;"></div>
  <hr>
</nav>
<div class="container-fluid px-5 py-2" style="margin-top:120px;">
  <form action="<?= base_url('c_faq/search') ?>" method="POST">
    <div class="input-group">
      <input type="text" class="form-control" style="border-radius:40px;" placeholder="Search for articles ..." name="keyword">
      <span class="input-group-btn">
        <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
      </span>
    </div>
  </form>
</div>

  <div class="row px-5 py-2">
    <div class="col-12">
      <h5>Found <?= count($faq) ?> Questions</h5>
      <?php
      foreach ($faq as $data) {
        ?>
        <div class="card mt-2">
          <div class="card-body">
            <h6 class="card-title"><?= $data['pertanyaan'] ?></h6>
            <a class="text-primary lihat_jawab" data-toggle="collapse" href="#collapse<?= $data['ID_faq'] ?>" role="button" aria-expanded="false" aria-controls="collapseExample">lihat jawaban</a>
            <div class="collapse" id="collapse<?= $data['ID_faq'] ?>">
              <div class="jawaban">
                <p class="card-text"><?= $data['jawaban'] ?></p>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <small class="text-secondary">Last Updated <?= $data['dateupdated'] ?></small><br>
            <small class="text-secondary">Kategori: <?= $data['kategori'] ?></small><br>
            <small class="text-secondary">Author: <?= $data['author'] ?></small>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>