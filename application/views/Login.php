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
        <a class="nav-link" href="<?= base_url() ?>user/contact">Contact Us</a>
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
          <a class="nav-link active" href="<?= base_url() ?>C_login/index"><button class="btn btn-info btn-sm" style="color:#EEE8AA;">Login</button></a>
        </li>
      <?php
      }
      ?>
    </ul>
  </div>

</nav>
<div class="box">
  <div class="p-4">
    <form action="<?= base_url() ?>C_login" method="POST">
      <div class="form-group">
        <p style="color:#3AAFA9;font-size:30px; margin-left:180px;">LOGIN</p>
        <a style="color:#3AAFA9;">Username :</a> <input type="text" class="form-control" id="uname" placeholder="Username" name="Username">
        <?php echo form_error('Username', '<small class="form-text text-danger pl-3">*', '</small>'); ?>
      </div>
      <div class="form-group">
        <a style="color:#3AAFA9;">Password :</a>
        <input type="password" class="form-control" id="pwd" placeholder="Password" name="Password">
        <?php echo form_error('Password', '<small class="form-text text-danger pl-3">*', '</small>'); ?>
      </div>
      <a href="<?= base_url() ?>C_login/Login"><button type="submit" class="btn btn-block" style="background-color:#3AAFA9; color: #EEE88A;">Login</button></a>
    </form>
    <a href="<?= base_url() ?>user/forgot_password" class="text-info float-right">Forgot password?</a><br>
    <a href="<?= base_url() ?>C_login/register" class="text-info float-right">Create account?</a>

  </div>
</div>