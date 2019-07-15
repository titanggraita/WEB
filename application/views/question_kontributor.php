
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
  <a class="navbar-brand" style="margin-left:50px;margin-top:-30px;" href="<?= base_url() ?>C_kontributor"><img src="<?= base_url() ?>assets/gambar/batan1.png" class="img-brand"></a>
  <div class="row">
      <h4 style="color:#EEE8AA; margin-left:20px;margin-top:10px;">Welcome, Kontributor!</h4>
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
  <a href="<?=base_url()?>C_kontributor"><i class="fa fa-fw fa-tachometer"></i> Dashboard</a><br>
  <a href="<?=base_url()?>C_kontributor/lihat_questionKontributor"><i class="fa fa-fw fa-question-circle"></i> Question</a><br>
  
</div>

  <center style="margin-top:100px;margin-left:150px;"><h4>DATA QUESTION & ANSWER</h4></center><br>
  <center style="margin-left:150px;"><?php echo anchor('C_kontributor/tambah/','Tambah Pertanyaan'); ?></center><br>
  <center><table style="margin:20px auto;margin-left:420px;" border="1" cellspacing="7" cellpadding="7">
		<tr>
			<th>No</th>
      <th>Pertanyaan</th>
      <th>Jawaban</th>
      <th>Date</th>
      <th>Action 1</th>
      <th>Action 2</th>
      <th>Action 3</th>
      
		</tr>
		<?php 
		$no = 1;
		foreach($question_kontributor as $qk){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
      <td><?php echo $qk['pertanyaan'];?></td>
      <td><?php echo $qk['jawaban'];?></td>
      <td><?php echo $qk['date_answered'];?></td>
            <td><?php echo anchor('C_kontributor/Answer_Kontributor/'.$qk['ID_assigned'],'Jawab'); ?></td>
            <td><?php echo anchor('C_kontributor/ubah/'.$qk['ID_assigned'],'Edit'); ?></td>
            <td><?php echo anchor('C_kontributor/hapus/'.$qk['ID_assigned'],'Hapus'); ?></td>
			
		</tr>
		<?php } ?>
	</table>
  </center>
 
</body>
</html> 
