<?php
  session_start();
  session_destroy();
  echo "<script>window.alert('Sukses Keluar dari system.');
				window.location='http://localhost/online/login.html'</script>";
	die();
		

?>