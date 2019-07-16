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
      <?php
      if ($this->session->userdata('user')) {
        # code...
      } else {
        # code...
      }

      ?>
      <li class="nav-item ml-2">
        <a class="nav-link" href="<?= base_url() ?>user/Open_question"><button class="btn btn-info btn-sm" style="color:#EEE8AA;">Open Question</button></a>
      </li>
      <li class="nav-item ml-2">
        <a class="nav-link" href="<?= base_url() ?>C_login/index"><button class="btn btn-info btn-sm" style="color:#EEE8AA;">Login</button></a>
      </li>
    </ul>
  </div>

</nav>
<div class="bg-nav text-center py-4">
  <p style="color:#EEE8AA; font-size:18px;">How can we help you today?</p>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="<?= base_url('c_faq/search') ?>" method="POST">
          <div class="input-group">
            <input type="text" class="form-control" style="border-radius:40px;" placeholder="Search for articles ..." name="keyword">
            <span class="input-group-btn">
              <button class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" style="margin-top:30px;">
  <div class="row">
    <?php
    foreach ($kategori as $data) {
      $jml = $this->db->query("SELECT COUNT(pertanyaan) as jumlah FROM faq WHERE kategori = '" . $data['Nama_kategori'] . "'")->row_array();
      ?>
      <div class="col-lg-4 mt-1">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $data['Nama_kategori']; ?></h5>
            <p class="card-text"><?= $jml['jumlah'] ?> articles</p>
            <a href="#" class="btn btn-primary bg-nav" style="color:#EEE8AA;">Go To Question</a>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>