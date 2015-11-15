<?php
error_reporting(0);
include "config/koneksi.php";
$pass=md5($_POST[password]);
$level=$_POST[level];
$username = $_POST[id_user];
if ($level=='superuser'){
$login=mysql_query("SELECT * FROM sn_users
			WHERE aemail='".mysql_real_escape_string($username)."' AND password='$pass' AND level='$level'");
$cocok=mysql_num_rows($login);
$r=mysql_fetch_array($login);

	if ($cocok > 0){
		session_start();
		$_SESSION[id_user]     = $r[id_user];
		$_SESSION[namauser]     = $r[username];
		$_SESSION[email]    	= $r[aemail];
		$_SESSION[namalengkap]  = $r[nama_lengkap];
		$_SESSION[passuser]     = $r[password];
		$_SESSION[level]    = $r[level];
		
		echo "<script>window.alert('Sukses Login Sebagai Superuser.');
					window.location='content/admin.html'</script>";
	}else{
		echo "<script>window.alert('Username atau Password anda salah.');
					window.location='index.html'</script>";
	}
}

elseif ($level=='kepala'){
$login=mysql_query("SELECT * FROM rb_users
			WHERE aemail='".mysql_real_escape_string($username)."' AND password='$pass' AND level='$level'");
$cocok=mysql_num_rows($login);
$r=mysql_fetch_array($login);

	if ($cocok > 0){
		session_start();
		$_SESSION[id_user]     = $r[id_user];
		$_SESSION[namauser]     = $r[username];
		$_SESSION[email]    	= $r[aemail];
		$_SESSION[namalengkap]  = $r[nama_lengkap];
		$_SESSION[passuser]     = $r[password];
		$_SESSION[level]    = $r[level];
		$_SESSION[status]   		= '1';
		
		echo "<script>window.alert('Sukses Login Sebagai Kepala Sekolah.');
					window.location='content/media.php?module=homee'</script>";
	}else{
		echo "<script>window.alert('Username atau Password anda salah.');
					window.location='index.html'</script>";
	}
}

elseif ($level=='wakil'){
$login=mysql_query("SELECT * FROM rb_users
			WHERE aemail='".mysql_real_escape_string($username)."' AND password='$pass' AND level='$level'");
$cocok=mysql_num_rows($login);
$r=mysql_fetch_array($login);

	if ($cocok > 0){
		session_start();
		$_SESSION[id_user]     = $r[id_user];
		$_SESSION[namauser]     = $r[username];
		$_SESSION[email]    	= $r[aemail];
		$_SESSION[namalengkap]  = $r[nama_lengkap];
		$_SESSION[passuser]     = $r[password];
		$_SESSION[level]   		= 'kepala';
		$_SESSION[status]   		= '2';
		
		echo "<script>window.alert('Sukses Login Sebagai Wakil Kepala Sekolah.');
					window.location='content/media.php?module=homee'</script>";
	}else{
		echo "<script>window.alert('Username atau Password anda salah.');
					window.location='index.html'</script>";
	}
}

elseif ($level=='guru'){
$login=mysql_query("SELECT * FROM sn_guru
			WHERE nuptk='".mysql_real_escape_string($username)."' AND password='$_POST[password]'");
$cocok=mysql_num_rows($login);
$r=mysql_fetch_array($login);

	if ($cocok > 0){
		session_start();
		$_SESSION[id_user]     = $r[nip];
		$_SESSION[namauser]     = $r[nip];
		$_SESSION[email]    	= $r[alamat];
		$_SESSION[namalengkap]  = $r[nama];
		$_SESSION[passuser]     = $r[password];
		$_SESSION[level]    = 'guru';
		
		echo "<script>window.alert('Sukses Login Sebagai Guru.');
					window.location='content/guru.html'</script>";
	}else{
		echo "<script>window.alert('Username atau Password anda salah.');
					window.location='index.html'</script>";
	}
}

elseif ($level=='siswa'){
$login=mysql_query("SELECT * FROM sn_siswa
			WHERE nis='".mysql_real_escape_string($username)."' AND password='$_POST[password]'");
$cocok=mysql_num_rows($login);
$r=mysql_fetch_array($login);

	if ($cocok > 0){
		session_start();
		$_SESSION[id_user]     = $r[nopendaftaran];
		$_SESSION[namauser]     = $r[noinduk];
		$_SESSION[email]    	= $r[alamat];
		$_SESSION[namalengkap]  = $r[nama];
		$_SESSION[passuser]     = $r[password];
		$_SESSION[kelas]     = $r[kodekelas];
		$_SESSION[level]    = 'siswa';
		
		echo "<script>window.alert('Sukses Login Sebagai Siswa.');
					window.location='siswa.html'</script>";
	}else{
		echo "<script>window.alert('Username atau Password anda salah.');
					window.location='index.html'</script>";
	}
}

?>