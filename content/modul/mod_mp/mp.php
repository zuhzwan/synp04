<?php
if ($_GET[aksi]=='tambah'){
?>
		<article class="col-md-12 maincontent">
				<header class="page-header">
				<h2 class="page-title">Tambah Data Mata Pelajaran</h2>
					
				</header>
				<div class="row">
						
						<form>
						<div class="col-lg-6 col-lg-8">
								<div class="top-margin">
									<label>ID <span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="IDMapel">
								</div>
								<div class="top-margin">
									<label>Mata Pelajaran<span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="Mata Pelajaran">
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
?>
<article class="col-md-12 maincontent">
				<header class="page-header">
				<h2 class="page-title">Edit Data Mata Pelajaran</h2>
					
				</header>
				<div class="row">
						
						<form>
						<div class="col-lg-6 col-lg-8">
								<div class="top-margin">
									<label>ID <span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="IDMapel">
								</div>
								<div class="top-margin">
									<label>Mata Pelajaran<span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="Mata Pelajaran">
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
}else {
?>
<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
				<h2 class="page-title">Data Mata Pelajaran <a class='btn btn-action' title='Lihat Detail' href='data_pelajaran-tambah.syn'>Tambah Data</a></h2>
					
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
							<tr>
							  <td>1</td>
							  <td>1126</td>
							  <td>Bahasa Indonesia</td>
							  <td width="240">
								<a class='btn btn-success btn-sm' title='Lihat Detail' href='#'>Edit</a>
								<a class='btn btn-danger btn-sm' title='Lihat Detail' href='#'>Hapus</a>
								</td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>1127</td>
							  <td>IPA</td>
							 <td width="240">
								<a class='btn btn-success btn-sm' title='Lihat Detail' href='#'>Edit</a>
								<a class='btn btn-danger btn-sm' title='Lihat Detail' href='#'>Hapus</a>
								</td>
							</tr>
							<tr>
							  <td>3</td>
							  <td>1128</td>
							  <td>Matematika</td>
							 <td width="240">
								<a class='btn btn-success btn-sm' title='Lihat Detail' href='#'>Edit</a>
								<a class='btn btn-danger btn-sm' title='Lihat Detail' href='#'>Hapus</a>
								</td>
							</tr>
							<tr>
							  <td>4</td>
							  <td>1128</td>
							  <td>Bahasa Inggris</td>
							 <td width="240">
								<a class='btn btn-success btn-sm' title='Lihat Detail' href='#'>Edit</a>
								<a class='btn btn-danger btn-sm' title='Lihat Detail' href='#'>Hapus</a>
								</td>
							</tr>
						</table>
					  </div>
					  </div>
						
				</div>
				
			</article>
			<!-- /Article -->
			
			
			<?php }?>