<nav class="navbar navbar-expand-lg bg-nav fixed-top">
  <a class="navbar-brand" style="margin-left:50px; margin-bottom:98px;" href="<?= base_url() ?>user"><img src="<?= base_url() ?>assets/gambar/batan1.png" class="img-brand"></a>
  <div class="row" >
    <h4 style="color:#EEE8AA; margin-left:20px;margin-bottom:40px;">FAQ SYSTEM</h4>
    <div class="topnav-lain topnav">
      <a href="<?=base_url()?>user/index" class="active">Home</a>
      <a href="<?=base_url()?>user/about">About</a>
      <a href="<?=base_url()?>user/policies">Policies</a>
      <a href="<?=base_url()?>user/contact">Contact Us</a> 
    </div>
  </div>
  <div style="margin-top:100px;"></div>
</nav>
<div id="box" style="margin-top:220px;">
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
                    <a style="color:#3AAFA9;">Province :</a><input type="text" class="form-control" id="lokasi" placeholder="Province" name="Province">
                    </div>
                    <div class="form-group">
                    <a style="color:#3AAFA9;">State :</a><input type="text" class="form-control" id="negara" placeholder="State" name="State">
                    </div>
                    <button type="submit" class="btn btn-block" style="background-color:#3AAFA9; color: #EEE88A;">Register</button>
                </form>
                <a href="<?=base_url()?>C_login/index" class="text-info float-right">Already have an account?</a>
            </div>
        </div>