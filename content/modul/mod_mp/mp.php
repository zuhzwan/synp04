<?php
$aksi="modul/mod_mp/aksi_mp.php";
$syarat=$_GET['id'];
if ($_GET[aksi]=='tambah'){
?>
		<article class="col-md-12 maincontent">
				<header class="page-header">
				<h2 class="page-title">Tambah Data Mata Pelajaran</h2>
					
				</header>
				<div class="row">
						
						<form method='POST' action="<?php echo $aksi;?>?module=mpbaru&act=input">
						<div class="col-lg-6 col-lg-8">
								<div class="top-margin">
									<label>ID <span class="text-danger">*</span></label>
									<input type="text" name="id_mp" class="form-control" placeholder="ID Mapel">
								</div>
								<div class="top-margin">
									<label>Mata Pelajaran<span class="text-danger">*</span></label>
									<input type="text" name="mata_pelajaran" class="form-control" placeholder="Mata Pelajaran">
								</div>
								
								<hr>

								<div class="row">
									<div class="col-lg-7">
										
									</div>
									<div class="col-lg-4 ">
										<button class="btn btn-action" type="submit">Tambah</button>
									</div>
								</div>
									
								</div>
							
							</form>
					
				</div>
				
			</article>
<?php
}elseif ($_GET[aksi]=='edit' && $_GET[id]){
$data	= "select * from sn_mp where id_mp='$syarat'";
$hasil	= mysql_query($data);
$row	= mysql_fetch_array($hasil);
?>
<article class="col-md-12 maincontent">
				<header class="page-header">
				<h2 class="page-title">Edit Data Mata Pelajaran</h2>
					
				</header>
				<div class="row">
						
						<form method='POST' action="<?php echo $aksi;?>?module=mpbaru&act=update">
						<div class="col-lg-6 col-lg-8">
								<div class="top-margin">
									<label>ID <span class="text-danger">*</span></label>
									<input type="text" name="id_mp" class="form-control" value="<?php echo $row['id_mp'];?>">
								</div>
								<div class="top-margin">
									<label>Mata Pelajaran<span class="text-danger">*</span></label>
									<input type="text" name="nama_mp" class="form-control" value="<?php echo $row['nama_mp'];?>">
								</div>
								
								<hr>

								<div class="row">
									<div class="col-lg-7">
										
									</div>
									<div class="col-lg-4 ">
										<button class="btn btn-action" type="submit">Edit</button>
									</div>
								</div>
									
								</div>
							
							</form>
					
				</div>
				
			</article>
<?php
}else {
?>
<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
				<h2 class="page-title">Data Mata Pelajaran <a class='btn btn-action' title='Lihat Detail' href='data_pelajaran-tambah.html'>Tambah Data</a></h2>
					
				</header>
				<div class="row">
					  <div class="col-sm-4 col-md-12">
					  <div class="table-responsive">
						<table class="table table-condensed">
							<thead>
								<tr>
								<th >No</th>
								<th>ID</th>
								<th>Mata Pelajaran</th>
								<th>Aksi</th>
								</tr>
							</thead>
							
        <?php 
							$tampil=mysql_query("SELECT * FROM sn_mp");
        $noUrut = 1;
							while($row=mysql_fetch_array($tampil)){
							
							?>
        <tr>
							  <td><?php echo $noUrut;?></td>
							  <td><?php echo $row[id_mp];?></td>
							  <td><?php echo $row[nama_mp];?></td>
							  <td width="240">
								<a class='btn btn-success btn-sm' title='Lihat Detail' href='data_pelajaran-edit-<?php echo $row[id_mp]; ?>.html'>Edit</a>
								<a class='btn btn-danger btn-sm' onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href='<?php echo $aksi;?>?module=mpbaru&act=hapus&id=<?php echo $row[id_mp]; ?>'>Hapus</a>
								</td>
							</tr>
          <?php
       $noUrut++;
       } ?>
         
						</table>
					  </div>
					  </div>
						
				</div>
				
			</article>
			<!-- /Article -->
			
			
			<?php }?>