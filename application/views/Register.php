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
<div id="box" style="margin-top:50px;">
  <div class="p-4">
    <form action="" method="POST">
      <div class="form-group">
        <p style="color:#3AAFA9;font-size:30px; margin-left:180px;">Register</p>
        <a style="color:#3AAFA9;">Username :</a><input type="text" class="form-control" id="username" placeholder="Username" name="Username">
      </div>
      <div class="form-group">
        <a style="color:#3AAFA9;">Password :</a><input type="password" class="form-control" id="pwd" placeholder="Password" name="Password">
      </div>
      <div class="form-group">
        <a style="color:#3AAFA9;">Email :</a><input type="email" class="form-control" id="email" placeholder="Email" name="Email">
      </div>
      <div class="form-group">
        <a style="color:#3AAFA9;">Nama :</a><input type="text" class="form-control" id="nama" placeholder="Nama" name="Nama">
      </div>
      <div class="form-group">
        <a style="color:#3AAFA9;">Institution :</a><input type="text" class="form-control" id="institusi" placeholder="Institution" name="Institution">
      </div>
      <div class="form-group">
        <a style="color:#3AAFA9;">Job :</a><input type="text" class="form-control" id="job" placeholder="Job" name="Job">
      </div>
      <div class="form-group">
        <label for="sel1" style="color:#3AAFA9;">Province :</label>
        <select class="form-control" id="sel1">
        <?php 
        foreach($provinsi as $pr){ 
          $this->db->query("SELECT * FROM daftar_provinsi")->row_array();
        ?>
          <option><?php echo $pr['Nama_provinsi']; ?></option>
        <?php }?>
        </select>
      </div>
      <div class="form-group">
        <label for="sel1" style="color:#3AAFA9;">State :</label>
        <select class="form-control" id="sel1">
        <?php 
        foreach($negara as $ne){ 
          $this->db->query("SELECT * FROM daftar_negara")->row_array();
        ?>
          <option><?php echo $ne['Nama_negara']; ?></option>
        <?php }?>
        </select>
      </div>
      <button type="submit" class="btn btn-block" style="background-color:#3AAFA9; color: #EEE88A;">Register</button>
    </form>
    <a href="<?= base_url() ?>C_login/index" class="text-info float-right">Already have an account?</a>
  </div>
</div>