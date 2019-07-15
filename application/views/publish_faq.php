
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
      <a href="<?=base_url()?>" style="margin-left:-10px;"><i class="fa fa-fw fa-user fa-lg"></i>Profile</a>
      <a href="<?=base_url()?>C_login/logout"><i class="fa fa-fw fa-sign-out"></i> Sign Out</a>
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
  <a href="<?=base_url()?>C_Admin/lihat_question"><i class="fa fa-fw fa-question-circle"></i> Question</a><br>
  <a href="<?=base_url()?>C_Admin/lihat_category"><i class="fa fa-fw fa-bookmark"></i> Category</a><br>
   
</div>

<div id="boxF" style="margin-left:450px;">
            <div class="p-4">    
                <form action="" method="POST">
                    <div class="form-group">
                        <p style="color:#3AAFA9;font-size:30px; margin-left:120px;">FORM PUBLISH</p>
                        <a style="color:#3AAFA9;">Pertanyaan :</a><input type="text" class="form-control" id="pertanyaan" placeholder="pertanyaan" name="pertanyaan" value="<?php echo $publish->pertanyaan ?>" readonly>
                    </div>
                    <div class="form-group">
                        <a style="color:#3AAFA9;">Jawaban :</a><input type="text" class="form-control" id="jawaban" placeholder="jawaban" name="jawaban" value="<?php echo $publish->jawaban ?>"readonly>
                    </div>
                    <div class="form-group">
                        <a style="color:#3AAFA9;">Kategori :</a><input type="text" class="form-control" id="kategori" placeholder="kategori" name="kategori">
                    </div>
                    <div class="form-group">
                        <a style="color:#3AAFA9;">Keyword :</a><input type="text" class="form-control" id="keyword" placeholder="keyword" name="keyword">
                    </div>
                    <div class="form-group">
                        <a style="color:#3AAFA9;">Author :</a><input type="text" class="form-control" id="author" placeholder="author" name="author">
                    </div>
                    <div class="form-group">
                      <a style="color:#3AAFA9;">Status :</a><input type="text" class="form-control" id="status" placeholder="status" name="status">
                    </div>
                    
                    <button type="submit" name="submit" value="submit" class="btn btn-block" style="background-color:#3AAFA9; color: #EEE88A;">Submit</button>
                </form>
                
            </div>
        </div>



     
</body>
</html> 
