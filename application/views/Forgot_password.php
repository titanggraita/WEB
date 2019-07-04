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
<div class="box2">
<div class="container">
	<div class="row">
		<div class="col">
            <div class="panel panel-default">
              <div class="panel-body" style="margin-top:60px;">
                <div class="text-center">
                  <h2 class="text-center">Forgot Password?</h2>
                  <p style="color:#3AAFA9;">You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="Email address" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-lg btn-info btn-block" style="color: #EEE88A;">Reset Password</button>
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>