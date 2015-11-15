<?php
$aksi="modul/mod_siswa/aksi_siswa.php";
$syarat=$_GET['id'];
if ($_GET[aksi]=='tambah'){
?>
<article class="col-md-12 maincontent">
				<header class="page-header">
				<h2 class="page-title">Tambah Data Siswa</h2>
					
				</header>
				<div class="row">
						
						<form method='POST' action="<?php echo $aksi;?>?module=siswabaru&act=input">
						<div class="col-lg-6 col-lg-8">
								<div class="top-margin">
									<label>NIS <span class="text-danger">*</span></label>
									<input type="text" name="nis" class="form-control" placeholder="NIS">
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" name="password" class="form-control" placeholder="Password">
								</div>
								
								<div class="top-margin">
									<label>Nama Siswa <span class="text-danger">*</span></label>
									<input type="text" name="nm_siswa"class="form-control" placeholder="Nama Siswa">
								</div>
									
								</div>
							<div class="col-lg-6 col-lg-8">
								
								
								<div class="top-margin">
									<label>Tempat Lahir <span class="text-danger">*</span></label>
									<input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir">
								</div>
								<div class="top-margin">
									<label>Tanggal Lahir <span class="text-danger">*</span></label>
									<input type="date" name="tgl_lahir" class="form-control">
								</div>
								<div class="top-margin">
									<label>Kelas <span class="text-danger">*</span></label>
									<input type="text" name="id_kelas" class="form-control" placeholder="Kelas">
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
<?php } elseif($_GET[aksi]=='edit' && $_GET[id]){ 
$data	= "select * from sn_siswa where id_siswa=$syarat";
$hasil	= mysql_query($data);
$row	= mysql_fetch_array($hasil);
?>

<article class="col-md-12 maincontent">
				<header class="page-header">
				<h2 class="page-title">Edit Data Siswa</h2>
					
				</header>
				<div class="row">
						
						<form method='POST' action="<?php echo $aksi;?>?module=siswabaru&act=update">
						<div class="col-lg-6 col-lg-8">
								<div class="top-margin">
									<label>NIS <span class="text-danger">*</span></label>
									<input type="hidden" name="id_siswa" class="form-control" value="<?php echo $row['id_siswa'];?>">
									<input type="text" name="nis" class="form-control" value="<?php echo $row['nis'];?>">
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" name="password" class="form-control" value="<?php echo $row['password'];?>">
								</div>
								
								<div class="top-margin">
									<label>Nama Siswa <span class="text-danger">*</span></label>
									<input type="text" name="nama_siswa" class="form-control" value="<?php echo $row['nama_siswa'];?>">
								</div>
									
								</div>
							<div class="col-lg-6 col-lg-8">
								
								
								<div class="top-margin">
									<label>Tempat Lahir <span class="text-danger">*</span></label>
									<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $row['tempat_lahir'];?>">
								</div>
								<div class="top-margin">
									<label>Tanggal Lahir <span class="text-danger">*</span></label>
									<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $row['tanggal_lahir'];?>">
								</div>
								<div class="top-margin">
									<label>Kelas <span class="text-danger">*</span></label>
									<input type="text" name="id_kelas" class="form-control" value="<?php echo $row['id_kelas'];?>">
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



 <?php }else{?>
<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h2 class="page-title">Data Siswa <a class='btn btn-action' title='Lihat Detail' href='data_siswa-tambah.html'>Tambah Data</a></h2>
				</header>
				<div class="row">
					  <div class="col-sm-4 col-md-12">
					  <div class="table-responsive">
						<table class="table table-condensed">
							<thead>
								<tr>
								<th>No</th>
								<th>NIS</th>
								<th>Nama Siswa</th>
								<th>Tempat, Tanggal Lahir</th>
								<th>Kelas</th>
								<th>Aksi</th>
								</tr>
							</thead>
							
							<?php 
							$tampil=mysql_query("SELECT id_siswa,
														nis,
														nama_siswa,
														tempat_lahir,
														DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir, 
														id_kelas
														FROM sn_siswa");
        $noUrut = 1;
							while($row=mysql_fetch_array($tampil)){
							
							?>
							<tr>
							  <td><?php echo $noUrut;?></td>
							  <td><?php echo $row[nis]; ?></td>
							  <td><?php echo $row[nama_siswa]; ?></td>
							  <td><?php echo $row[tempat_lahir]; ?>, <?php echo $row[tanggal_lahir]; ?></td>
							  <td><?php echo $row[id_kelas]; ?></td>
							  <td width="240">
								<a class='btn btn-success btn-sm' title='Lihat Detail' href='data_siswa-edit-<?php echo $row[id_siswa]; ?>.html'>Edit</a>
								<a class='btn btn-danger btn-sm' title='Lihat Detail' onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href='<?php echo $aksi;?>?module=siswabaru&act=hapus&id=<?php echo $row[id_siswa]; ?>'>Hapus</a>
								</td>
							</tr>
							<?php 
       $noUrut++;
       }?>
							
						</table>
					  </div>
					  </div>
						
				</div>
				
			</article>
			<!-- /Article -->
<?php }?>