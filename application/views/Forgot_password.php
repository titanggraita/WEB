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
<div class="box text-center">
  <div class="p-4">
    <h2 class="text-center">Forgot Password?</h2>
    <p style="color:#3AAFA9;">You can reset your password here.</p>
    <form id="register-form" role="form" autocomplete="off" class="form" method="post">

      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
          <input id="email" name="email" placeholder="Email address" class="form-control" type="email">
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-lg btn-info btn-block" style="color: #EEE88A;">Reset Password</button>
      </div>

      <input type="hidden" class="hide" name="token" id="token" value="">
    </form>

  </div>
</div>