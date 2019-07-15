
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
  <a href="<?=base_url()?>C_Admin/index"><i class="fa fa-fw fa-tachometer"></i> Dashboard</a><br>
  <a href="<?=base_url()?>C_Admin/lihat_user"><i class="fa fa-fw fa-users"></i> User</a><br>
  <a href="<?=base_url()?>C_Admin/lihat_kontributor"><i class="fa fa-fw fa-users"></i> Contributor</a><br>
  <a href="<?=base_url()?>C_Admin/lihat_question""><i class="fa fa-fw fa-question-circle"></i> Question</a><br>
  <a href="<?=base_url()?>C_Admin/lihat_category"><i class="fa fa-fw fa-bookmark"></i> Category</a> <br>
  
</div>

  <center style="margin-top:100px;margin-left:50px;"><h4>DATA USER [Public, Contributor, Admin]</h4></center><br>
  <center style="margin-left:30px;"><?php echo anchor('C_Admin/tambah','Tambah Data'); ?></center><br>
	<center><table style="margin-top:20px;margin-left:160px;" border="1" cellspacing="7" cellpadding="7">
		<tr>
			      <th>No</th>
            <th>Level</th>
            <th>Username</th>
			      <th>Email</th>
            <th>Password</th>
            <th>Nama</th>
            <th>Institution</th>
            <th>Job</th>
            <th>Province</th>
            <th>State</th>
            <th>Aktivasi</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($public as $p){ 
		?>
		<tr>
		      	<td><?php echo $no++ ?></td>
            <td><?php echo $p['ID_level'];?></td>
			      <td><?php echo $p['Username'];?></td>
            <td><?php echo $p['Email'];?></td>
            <td><?php echo $p['Password'];?></td>
            <td><?php echo $p['Nama'];?></td>
            <td><?php echo $p['Institution'];?></td>
            <td><?php echo $p['Job'];?></td>
            <td><?php echo $p['Province'];?></td>
            <td><?php echo $p['State'];?></td>
            <td><?php echo $p['Aktivasi'];?></td>
            

			<td>
            <?php echo anchor('C_Admin/ubah/'.$p['ID_user'],'Edit'); ?>
                          <?php echo anchor('C_Admin/hapus/'.$p['ID_user'],'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
  </center>


     
</body>
</html> 
