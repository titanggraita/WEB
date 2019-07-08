<nav class="navbar navbar-expand-lg bg-nav fixed-top">
  <a class="navbar-brand" style="margin-left:50px; margin-bottom:200px;" href="<?= base_url() ?>user"><img src="<?= base_url() ?>assets/gambar/batan1.png" class="img-brand"></a>
  <div class="row">
    <h4 style="color:#EEE8AA; margin-left:30px;margin-bottom:100px;">FAQ SYSTEM</h4>
    <div class="topnav">
      <a href="<?= base_url() ?>user/index" class="active">Home</a>
      <a href="<?= base_url() ?>user/about">About</a>
      <a href="<?= base_url() ?>user/policies">Policies</a>
      <a href="<?= base_url() ?>user/contact">Contact Us</a>
      <a href="<?= base_url() ?>C_login/register"><button type="button" class="btn btn-info" style="margin-top:-10px; color:#EEE8AA;">Open Question</button></a>
      <a href="<?= base_url() ?>C_login/index"><button type="button" class="btn btn-info" style="margin-left:-5px; margin-top:-10px; color:#EEE8AA;">Login</button></a>
    </div>
    <p style="color:#EEE8AA; margin-left:370px; font-size:18px;">How can we help you today?</p>
    <div class="container-fluid">
      <form action="<?= base_url('c_faq/search') ?>" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" style="border-radius:40px;" placeholder="Search for articles ...">
          <span class="input-group-btn">
            <button class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
          </span>
        </div>
      </form>
    </div>
  </div>
  <div style="margin-bottom:300px;"></div>
  <hr>
</nav>
<div class="container-fluid" style="margin-top:250px;">
  <div class="row" style="margin-left:-250px;">
    <?php
    foreach ($kategori as $data) {
      ?>
      <div class="col-md-4" style="margin:-50px;">
        <div id="box_kategori" style="padding: 14px 16px;">
          <a><?php echo $data['Nama_kategori']; ?></a>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>