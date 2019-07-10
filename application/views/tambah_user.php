
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #EEE8AA;
  overflow-x: hidden;
  padding-top: 16px;
  margin-top:100px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-nav fixed-top">
  <a class="navbar-brand" style="margin-left:50px;margin-top:-30px;" href="<?= base_url() ?>C_Admin"><img src="<?= base_url() ?>assets/gambar/batan1.png" class="img-brand"></a>
  <div class="row">
      <h4 style="color:#EEE8AA; margin-left:30px;margin-top:10px;">Welcome, Admin!</h4>
    <div class="topnav" style="margin-left:550px;font-size:15px;">
      <a href="<?=base_url()?>C_Admin/index"><i class="fa fa-fw fa-home fa-lg fa-2x"></i>Home</a>
      <a href="<?=base_url()?>"><i class="fa fa-fw fa-envelope fa-lg"></i> Message</a>
      <a href="<?=base_url()?>" style="margin-left:-10px;"><i class="fa fa-fw fa-user fa-lg"></i>Profile</a>
    </div>
  </div>
  <div style="margin-bottom:100px;"></div>
  <hr>
</nav>

<div class="sidebar">
  <br>
  <a href="<?=base_url()?>C_Admin/index""><i class="fa fa-fw fa-tachometer"></i> Dashboard</a><br>
  <a href="<?=base_url()?>C_Admin/lihat_user"><i class="fa fa-fw fa-users"></i> User</a><br>
  <a href="<?=base_url()?>C_Admin/lihat_kontributor"><i class="fa fa-fw fa-users"></i> Contributor</a><br>
  <a href="#"><i class="fa fa-fw fa-question-circle"></i> Question</a><br>
  <a href="<?=base_url()?>C_Admin/lihat_category"><i class="fa fa-fw fa-bookmark"></i> Category</a><br>
  <a href="<?=base_url()?>C_login/logout"><i class="fa fa-fw fa-sign-out"></i> Sign Out</a> 
</div>

<div id="box" style="margin-left:450px;">
            <div class="p-4">    
                <form action="" method="POST">
                    <div class="form-group">
                        <p style="color:#3AAFA9;font-size:30px; margin-left:120px;">TAMBAH DATA</p>
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
                    <button type="submit" class="btn btn-block" style="background-color:#3AAFA9; color: #EEE88A;">Submit</button>
                </form>
            </div>
        </div>



     
</body>
</html> 
