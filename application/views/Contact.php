<nav class="navbar navbar-expand-lg navbar-dark bg-nav py-3">
  <a class="navbar-brand" style="color:#EEE8AA;" href="<?= base_url() ?>user"><img src="<?= base_url() ?>assets/gambar/batan1.png" class="img-brand mr-3"> FAQ SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>user/index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>user/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>user/policies">Policies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="<?= base_url() ?>user/contact">Contact Us</a>
      </li>
      <?php
      if ($this->session->userdata('user')) {
        ?>
        <li class="nav-item ml-2">
          <a class="nav-link" href="<?= base_url() ?>user/Open_question"><button class="btn btn-info btn-sm" style="color:#EEE8AA;">Open Question</button></a>
        </li>
        <li class="nav-item ml-2">
          <a class="nav-link" href="<?= base_url() ?>C_login/logout"><button class="btn btn-info btn-sm" style="color:#EEE8AA;">Logout</button></a>
        </li>
      <?php
      } else {
        ?>
        <li class="nav-item ml-2">
          <a class="nav-link" href="<?= base_url() ?>C_login/register"><button class="btn btn-info btn-sm" style="color:#EEE8AA;">Register</button></a>
        </li>
        <li class="nav-item ml-2">
          <a class="nav-link" href="<?= base_url() ?>C_login/index"><button class="btn btn-info btn-sm" style="color:#EEE8AA;">Login</button></a>
        </li>
      <?php
      }
      ?>
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

<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <h3 class="text-center" style="color:#3AAFA9;">Contact Us</h3>
      <h3 class="text-center mt-4"><i class="fa fa-envelope fa-fw" style="color:#3AAFA9;"></i> layanan_si@batan.go.id</h3>
      <h3 class="text-center mt-4"><i class="fa fa-phone fa-fw" style="color:#3AAFA9;"></i> 021-7560567 ext 9007</h3>
      <h3 class="text-center mt-4"><i class="fa fa-phone fa-fw" style="color:#3AAFA9;"></i> 021-75875060</h3>
    </div>
  </div>
</div>