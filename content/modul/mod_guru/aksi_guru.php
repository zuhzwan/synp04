<?php
session_start();
include "../../../config/koneksi.php";


$module=$_GET[module];
$act=$_GET[act];

// Hapus format
if ($module=='gurubaru' AND $act=='hapus'){
  mysql_query("DELETE FROM sn_guru WHERE id_guru='$_GET[id]'");
  header('location:../../data_guru.html');
}

// Input format
elseif ($module=='gurubaru' AND $act=='input'){

		mysql_query("INSERT INTO sn_guru (id_guru,
										 nuptk,
										 password,
										 nama_guru,
           id_mp,
										 tempat_lahir,
										 tanggal_lahir) 
								VALUES('',
									   '$_POST[nuptk]',
									   '$_POST[password]',
									   '$_POST[nama_guru]',
									   '$_POST[mata_pelajaran]',
									   '$_POST[tempat_lahir]',
									   '$_POST[tanggal_lahir]')");
								   
		header('location:../../data_guru.html');

}
elseif ($module=='gurubaru' AND $act=='update'){

		mysql_query("UPDATE sn_guru SET nuptk 				= '$_POST[nuptk]',
										 password				= '$_POST[password]',
										 nama_guru 		= '$_POST[nama_guru]',
										 id_mp		= '$_POST[mata_pelajaran]',
										 tempat_lahir		= '$_POST[tempat_lahir]',
										 tanggal_lahir				= '$_POST[tanggal_lahir]' 
           where id_guru='$_POST[id_guru]'");
								   
		header('location:../../data_guru.html');

}
elseif ($module=='siswabaru' AND $act=='update'){

      mysql_query("UPDATE rb_siswa SET noinduk	 = '$_POST[aa]',
								       password  = '$_POST[ab]',
									   status    = '1',
									   kodekelas = '$_POST[ac]'
									where nopendaftaran ='$_POST[id]'");
									
	 header('location:../../media.php?module=siswabaru&status=0');
}


elseif ($module=='siswabaru' AND $act=='updatedata'){
	$dir_gambar = '../../../siswa/';
	$filename = basename($_FILES['g']['name']);
	$uploadfile = $dir_gambar . $filename;
	if ($filename != '' AND $_POST[ab] != ''){			
		if (move_uploaded_file($_FILES['g']['tmp_name'], $uploadfile)) {
			mysql_query("UPDATE rb_siswa SET password 			= '$_POST[ab]',
											 nama 				= '$_POST[a]',
											 alamat				= '$_POST[b]',
											 tempatlahir 		= '$_POST[c]',
											 tanggallahir		= '$_POST[d]',
											 jeniskelamin		= '$_POST[e]',
											 agama				= '$_POST[f]',
											 foto 				= '$filename',
											 asalcalonsiswa		= '$_POST[h]',
											 asalsekolah		= '$_POST[i]',
											 ijazah				= '$_POST[j]',
											 namaortu			= '$_POST[k]',
											 pekerjaan 			= '$_POST[l]',
											 kodekelas			= '$_POST[ac]' where nopendaftaran='$_POST[id]'");
									   
			header('location:../../media.php?module=siswabaru&status='.$_POST[status]);
		}else{
			echo "<script>window.alert('Gagal Tambahkan Data Siswa.');
									window.location='../../media.php?module=siswabaru&status=$_POST[status]'</script>";
		}
	}elseif ($filename == '' AND $_POST[ab] != ''){
		mysql_query("UPDATE rb_siswa SET password 			= '$_POST[ab]',
										 nama 				= '$_POST[a]',
										 alamat				= '$_POST[b]',
										 tempatlahir 		= '$_POST[c]',
										 tanggallahir		= '$_POST[d]',
										 jeniskelamin		= '$_POST[e]',
										 agama				= '$_POST[f]',
										 asalcalonsiswa		= '$_POST[h]',
										 asalsekolah		= '$_POST[i]',
										 ijazah				= '$_POST[j]',
										 namaortu			= '$_POST[k]',
										 pekerjaan 			= '$_POST[l]',
										 kodekelas			= '$_POST[ac]' where nopendaftaran='$_POST[id]'");
								   
		header('location:../../media.php?module=siswabaru&status='.$_POST[status]);
	}elseif ($filename != '' AND $_POST[ab] == ''){
		mysql_query("UPDATE rb_siswa SET nama 				= '$_POST[a]',
										 alamat				= '$_POST[b]',
										 tempatlahir 		= '$_POST[c]',
										 tanggallahir		= '$_POST[d]',
										 jeniskelamin		= '$_POST[e]',
										 agama				= '$_POST[f]',
										 foto 				= '$filename',
										 asalcalonsiswa		= '$_POST[h]',
										 asalsekolah		= '$_POST[i]',
										 ijazah				= '$_POST[j]',
										 namaortu			= '$_POST[k]',
										 pekerjaan 			= '$_POST[l]',
										 kodekelas			= '$_POST[ac]' where nopendaftaran='$_POST[id]'");
								   
		header('location:../../media.php?module=siswabaru&status='.$_POST[status]);
	}else{
		mysql_query("UPDATE rb_siswa SET nama 				= '$_POST[a]',
										 alamat				= '$_POST[b]',
										 tempatlahir 		= '$_POST[c]',
										 tanggallahir		= '$_POST[d]',
										 jeniskelamin		= '$_POST[e]',
										 agama				= '$_POST[f]',
										 asalcalonsiswa		= '$_POST[h]',
										 asalsekolah		= '$_POST[i]',
										 ijazah				= '$_POST[j]',
										 namaortu			= '$_POST[k]',
										 pekerjaan 			= '$_POST[l]',
										 kodekelas			= '$_POST[ac]' where nopendaftaran='$_POST[id]'");
								   
		header('location:../../media.php?module=siswabaru&status='.$_POST[status]);
	}
}
?>
