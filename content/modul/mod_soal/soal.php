<?php
if ($_GET[aksi]=='tambah'){
?>
<article class="col-md-12 maincontent">
				<header class="page-header">
				<h2 class="page-title">Tambah Soal</h2>
					
				</header>
				<div class="row">
						
						<form>
						<div class="col-lg-6 col-lg-8">
								<div class="top-margin">
									<label>Soal <span class="text-danger">*</span></label>
									<textarea type="text" class="form-control" placeholder="Ketikan Soal disini..."></textarea>
								</div>
								
									
								</div>
							<div class="col-lg-6 col-lg-8">
								
								
								<div class="top-margin">
									<label>Jawaban A <span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="Jawaban A">
								</div>
								<div class="top-margin">
									<label>Jawaban B <span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="Jawaban B">
								</div>
								<div class="top-margin">
									<label>Jawaban C <span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="Jawaban C">
								</div>
								<div class="top-margin">
									<label>Jawaban D <span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="Jawaban D">
								</div>
								<div class="top-margin">
									<label>Jawaban Benar <span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="Jawaban Benar">
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
<?php } elseif($_GET[aksi]=='edit' && $_GET[id]){ ?>

<article class="col-md-12 maincontent">
				<header class="page-header">
				<h2 class="page-title">Edit Data Siswa</h2>
					
				</header>
				<div class="row">
						
						<form>
						<div class="col-lg-6 col-lg-8">
								<div class="top-margin">
									<label>NIS <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" class="form-control">
								</div>
								
								<div class="top-margin">
									<label>Nama Siswa <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
									
								</div>
							<div class="col-lg-6 col-lg-8">
								
								
								<div class="top-margin">
									<label>Tempat Lahir <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Tanggal Lahir <span class="text-danger">*</span></label>
									<input type="date" class="form-control">
								</div>
								<div class="top-margin">
									<label>Kelas <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
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



 <?php }else{?>
<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h2 class="page-title">Data Soal <a class='btn btn-action' title='Lihat Detail' href='data_soal-tambah.syn'>Tambah Data</a></h2>
				</header>
				<div class="row">
					  <div class="col-sm-4 col-md-12">
					  <div class="table-responsive">
						<table class="table table-condensed">
							<thead>
								<tr>
								<th >No</th>
								<th>ID</th>
								<th>Soal</th>
								<th>Jawaban A</th>
								<th>Jawaban B</th>
								<th>Jawaban C</th>
								<th>Jawaban D</th>
								<th>Jawaban Benar</th>
								<th>Aksi</th>
								</tr>
							</thead>
							<tr>
							  <td>1</td>
							  <td>1126</td>
							  <td>Apa Itu Komputer?</td>
							  <td>.....</td>
							  <td>.....</td>
							  <td>.....</td>
							  <td>.....</td>
							  <td>...</td>
							  <td width="240">
								<a class='btn btn-success btn-sm' title='Lihat Detail' href='#'>Edit</a>
								<a class='btn btn-danger btn-sm' title='Lihat Detail' href='#'>Hapus</a>
								</td>
							</tr>
							<tr>
							  <td>1</td>
							  <td>1126</td>
							  <td>Apa Itu Komputer?</td>
							  <td>.....</td>
							  <td>.....</td>
							  <td>.....</td>
							  <td>.....</td>
							  <td>...</td>
							  <td width="240">
								<a class='btn btn-success btn-sm' title='Lihat Detail' href='#'>Edit</a>
								<a class='btn btn-danger btn-sm' title='Lihat Detail' href='#'>Hapus</a>
								</td>
							</tr>
							<tr>
							  <td>1</td>
							  <td>1126</td>
							  <td>Apa Itu Komputer?</td>
							  <td>.....</td>
							  <td>.....</td>
							  <td>.....</td>
							  <td>.....</td>
							  <td>...</td>
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