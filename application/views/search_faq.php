<nav class="navbar navbar-expand-lg navbar-dark bg-nav py-3">
  <a class="navbar-brand" style="color:#EEE8AA;" href="<?= base_url() ?>user"><img src="<?= base_url() ?>assets/gambar/batan1.png" class="img-brand mr-3"> FAQ SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active" href="<?= base_url() ?>user/index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>user/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>user/policies">Policies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>user/contact">Contact Us</a>
      </li>
    </ul>
  </div>

</nav>
<div class="container-fluid px-5 py-2" style="margin-top:40px;">
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