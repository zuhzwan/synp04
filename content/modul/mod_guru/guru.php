<?php
$aksi="modul/mod_guru/aksi_guru.php";
$syarat=$_GET['id'];
if ($_GET[aksi]=='tambah'){
?>
		<article class="col-md-12 maincontent">
				<header class="page-header">
				<h2 class="page-title">Tambah Data Guru</h2>
					
				</header>
				<div class="row">
						
						<form method='POST' action="<?php echo $aksi;?>?module=gurubaru&act=input">
						<div class="col-lg-6 col-lg-8">
								<div class="top-margin">
									<label>NUPTK <span class="text-danger">*</span></label>
									<input type="text" name="nuptk" class="form-control" placeholder="NUPTK">
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" name="password" class="form-control" placeholder="Password">
								</div>
								<div class="top-margin">
									<label>Nama Guru <span class="text-danger">*</span></label>
									<input type="text" name="nama_guru" class="form-control" placeholder="Nama Guru">
								</div>
								
									
								</div>
							<div class="col-lg-6 col-lg-8">
								<div class="top-margin">
									<label>Mata Pelajaran <span class="text-danger">*</span></label>
									<input type="text" name="mata_pelajaran" class="form-control" placeholder="Mata Pelajaran">
								</div>
								<div class="top-margin">
									<label>Tempat Lahir <span class="text-danger">*</span></label>
									<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
								</div>
								<div class="top-margin">
									<label>Tanggal Lahir <span class="text-danger">*</span></label>
									<input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
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
}elseif ($_GET[aksi]=='edit' AND $_GET[id]){
$data	= "select * from sn_guru where id_guru=$syarat";
$hasil	= mysql_query($data);
$row	= mysql_fetch_array($hasil);
?>
<article class="col-md-12 maincontent">
				<header class="page-header">
				<h2 class="page-title">Edit Data Guru</h2>
					
				</header>
				<div class="row">
						
						<form method='POST' action="<?php echo $aksi;?>?module=gurubaru&act=update">
						<div class="col-lg-6 col-lg-8">
								<div class="top-margin">
									<label>NUPTK <span class="text-danger">*</span></label>
									<input type="hidden" name="id_guru" value="<?php echo $row[id_guru];?>" class="form-control" placeholder="NUPTK">
									<input type="text" name="nuptk" value="<?php echo $row[nuptk];?>" class="form-control" placeholder="NUPTK">
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" name="password" value="<?php echo $row[password];?>" class="form-control" placeholder="Password">
								</div>
								<div class="top-margin">
									<label>Nama Guru <span class="text-danger">*</span></label>
									<input type="text" name="nama_guru" value="<?php echo $row[nama_guru];?>" class="form-control" placeholder="Nama Guru">
								</div>
								
									
								</div>
							<div class="col-lg-6 col-lg-8">
								<div class="top-margin">
									<label>Mata Pelajaran <span class="text-danger">*</span></label>
									<input type="text" name="mata_pelajaran" value="<?php echo $row[id_mp];?>" class="form-control" placeholder="Mata Pelajaran">
								</div>
								<div class="top-margin">
									<label>Tempat Lahir <span class="text-danger">*</span></label>
									<input type="text" name="tempat_lahir" value="<?php echo $row[tempat_lahir];?>"  class="form-control" placeholder="Tempat Lahir">
								</div>
								<div class="top-margin">
									<label>Tanggal Lahir <span class="text-danger">*</span></label>
									<input type="date" name="tanggal_lahir" value="<?php echo $row[tanggal_lahir];?>" class="form-control" placeholder="Tanggal Lahir">
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
				<h2 class="page-title">Data Guru <a class='btn btn-action' title='Lihat Detail' href='data_guru-tambah.html'>Tambah Data</a></h2>
					
				</header>
				<div class="row">
					  <div class="col-sm-4 col-md-12">
					  <div class="table-responsive">
						<table class="table table-condensed">
							<thead>
								<tr>
								<th >No</th>
								<th>NUPTK</th>
								<th>Nama Guru</th>
								<th>Tempat, Tanggal Lahir</th>
								<th>Mata Pelajaran</th>
								<th>Aksi</th>
								</tr>
							</thead>
							<?php 
							$tampil=mysql_query("SELECT id_guru,
                                    nuptk,
																																			nama_guru,
																																			tempat_lahir,
																																			DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') 
                                   	as tanggal_lahir,
																																			id_mp
																																			FROM sn_guru");
							while($row=mysql_fetch_array($tampil)){
							?>
							<tr>
							  <td>1</td>
							  <td><?php echo $row[nuptk]; ?></td>
							  <td><?php echo $row[nama_guru]; ?></td>
							  <td><?php echo $row[tempat_lahir]; ?>, <?php echo $row[tanggal_lahir]; ?></td>
							  <td><?php echo $row[id_mp]; ?></td>
							  <td width="240">
								<a class='btn btn-success btn-sm' title='Lihat Detail' href='data_guru-edit-<?php echo $row[id_guru]; ?>.html'>Edit</a>
								<a class='btn btn-danger btn-sm' title='Lihat Detail' onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href='<?php echo $aksi;?>?module=gurubaru&act=hapus&id=<?php echo $row[id_guru];?>'>Hapus</a>
								</td>
							</tr>
							<?php } ?>
						
						</table>
					  </div>
					  </div>
						
				</div>
				
			</article>
			<!-- /Article -->
			
			
			<?php }?>