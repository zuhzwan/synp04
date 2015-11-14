<?php
if ($_GET[module]=='home'){
 echo '<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h3>Selamat datang di Simulasi Ujian Nasional Online</h3>
				<h1 class="lead">SYNSOFT.WEB.ID SEKOLAH DEVELOPMENT</h1>
				<br>
				<p><a class="btn btn-default btn-lg" role="button" href="login.html">LOGIN SYSTEM</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->';
}
elseif ($_GET[module]=='siswa'){
 echo '<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h3>Selamat datang di Simulasi Ujian Nasional Online</h3>
				<h1 class="lead">HALAMAN SISWA</h1>
				<br>
				<p><a class="btn btn-default btn-lg" role="button" href="login.html">LOGIN SYSTEM</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->';
}

elseif ($_GET[module]=='login'){
	echo'
	<header id="head" class="secondary"></header>
	<div class="container">
		<div class="row">
	<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Sign in</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Sign in to your account</h3>
							<p class="text-center text-muted">Masukkan Username dan Password anda untuk sign in account.</p>
							<hr>
							
							<form action="cek_login.php" method="POST" onSubmit="return validasi(this)" id="registerHere">
								<div class="top-margin">
									<label>Username <span class="text-danger">*</span></label>
									<input type="text" name="id_user" class="form-control" placeholder="Username">
								</div>
								<div class="top-margin">
									<label>Level <span class="text-danger">*</span></label>
						
							<select name="level" class="form-control">
								<option value="" selected>- Pilih Level -</option>
								<option value="siswa">Siswa</option>
								<option value="guru">Guru</option>
								<option value="kepala">Kepala Sekolah</option>
								<option value="superuser">Admin / Superuser</option>
							</select>
							
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" name="password" class="form-control" placeholder="Password">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
									
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Sign in</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->
			</div>
			</div>';
}?>