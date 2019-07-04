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
<div id="box1" style="margin-top:195px;">
            <div class="p-4">    
                <form action="" method="POST">
                    <div class="form-group">
                        <p style="color:#3AAFA9;font-size:30px; margin-left:110px;">OPEN QUESTION</p>
                        <a style="color:#3AAFA9;">Username :</a> <input type="text" class="form-control" id="uname" placeholder="username" name="username">
                    </div>
                    <div class="form-group">
                    <a style="color:#3AAFA9;">Pertanyaan :</a><input type="text" class="form-control" id="txt" placeholder="pertanyaan" name="pertanyaan">
                    </div>
                    <button type="submit" class="btn btn-block" style="background-color:#3AAFA9; color: #EEE88A;">Submit</button>
                </form>
            </div>
</div>