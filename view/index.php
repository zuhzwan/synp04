<?php

	session_start(); 
	//periksa apakah user telah login atau memiliki session 
	if($_SESSION[level] == 'superuser') { 
		?>
		<script language='javascript'>
			alert('Anda masih login sebagai administrator'); 
			document.location='content/admin.html'
        </script>
		<?php 
	}else{
?>



		
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>SIMULNAS MA YKUI Maskumambang</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html">SIMULNAS</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				<?php if ($_SESSION[level] == 'siswa'){ ?>
					<li class="active"><a href="admin.html">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengelolahan Data <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="data_siswa.html">Data Siswa</a></li>
							<li><a href="data_guru.html">Data Guru</a></li>
							<li><a href="data_pelajaran.html">Data Mata Pelajaran</a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Peralatan <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Setting Header Print</a></li>
						
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Hasil Ujian</a></li>
						
						</ul>
					</li>
					<?php }else {
					echo'';
					
					}?>	
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
<?php
include 'content.php';

if ($_GET[module]=='home'){

echo'<footer id="footer">';}
else{
echo'<footer id="footer" class="top-space">';
}

?>
<!-- Fixed navbar -->
		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+234 23 9873237<br>
								<a href="mailto:#">maykuimaskumambang@gmail.com</a><br>
								<br>
								Jl. Raya PonPes Maskumambang Dukun Gresik
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">About Me</h3>
						<div class="widget-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
							<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					

					<div class="col-md-9 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2015, SIMULNAS MA YKUI MASKUMAMBANG. Developer by <a href="http://synsoft.web.id/" rel="designer">SYNSOFT.WEB.ID</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>
<?php }?>