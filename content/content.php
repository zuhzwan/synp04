<?php
include "../config/koneksi.php";




if ($_GET[module]=='guru'){
	include 'modul/mod_guru/home.php';
}
elseif ($_GET[module]=='data_siswa'){
	include 'modul/mod_siswa/siswa.php';
}
elseif ($_GET[module]=='data_soal'){
	include 'modul/mod_soal/soal.php';
}
elseif ($_GET[module]=='data_guru'){
	include 'modul/mod_guru/guru.php';
}
elseif ($_GET[module]=='m_pelajaran'){
	include 'modul/mod_mp/mp.php';
}


elseif ($_GET[module]=='printer'){
    $edit=mysql_query("SELECT * FROM rb_header_print ORDER BY id_header_print DESC LIMIT 1");
    $r=mysql_fetch_array($edit);
echo "	<form class='form-horizontal' method='post' action=''>
	  <fieldset>
		<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Setting Data Header Print Laporan dan Tanda Tangan.
		</div><br/>
	<input type='hidden' name='id' value='$r[id_header_print]'>  

	<div class='control-group'>
		<label class='control-label' for='input01'>Header 1</label>
	      <div class='controls'>
	        <textarea style='width:90%; height:100px' class='input-small' name='a' rel='popover'>$r[header_1]</textarea>    
	      </div>
	</div>
	
	<div class='control-group'>
		<label class='control-label' for='input01'>Header 2</label>
	      <div class='controls'>
	        <textarea style='width:90%; height:80px' class='input-small' name='b' rel='popover'>$r[header_2]</textarea>    
	      </div>
	</div>

	<div class='control-group'>
		<label class='control-label' for='input01'>Ttd Kiri</label>
	      <div class='controls'>
	        <input type='text' class='input-xlarge' name='c' value='$r[ttd_kiri]' rel='popover'> 
	      </div>
	</div>

	<div class='control-group'>
		<label class='control-label' for='input01'>Ttd Kanan</label>
	      <div class='controls'>
	        <input type='text' class='input-xlarge' name='d' value='$r[ttd_kanan]' rel='popover'>      
	      </div>
	</div>

	<div class='control-group'>
		<label class='control-label' for='input01'></label>
	      <div class='controls'>
	       <button type='submit' name='update' class='btn btn-success' rel='tooltip' title='first tooltip'>Update Data</button>
	      </div>
	</div> 
	  </fieldset>
	</form>"; 

	if (isset($_POST[update])){
		mysql_query("UPDATE rb_header_print SET header_1 	 = '$_POST[a]',
												header_2	 = '$_POST[b]',
												ttd_kiri  	 = '$_POST[c]',
												ttd_kanan 	 = '$_POST[d]' where id_header_print='1'");
		echo "<script>window.alert('Sukses Update Rumus Data Print Laporan.');
					window.location='media.php?module=printer'</script>";
	}
}

elseif ($_GET[module]=='homee'){
  $sql=mysql_query("SELECT * FROM rb_halaman WHERE halaman='home'");
  $r=mysql_fetch_array($sql);
    echo "<div class='alert alert-info'><b>$i[nama_sekolah]</b> $r[judul]</div><hr>
          <p>$r[detail]</p>";  
}

elseif ($_GET[module]=='kepwaka'){
   echo "<div class='alert alert-info'>Data Kepala Sekolah dan Wakil Kepala Sekolah</div><hr>";
		  echo "<table class='table table-hover' width=100%>
          <tr style='background:#e3e3e3; border:1px solid #cecece;'>
			<th width=60px>No</th>
			<th width=220px>Username</th>
			<th>Nama Lengkap</th>
			<th>Jenis Kelamin</th>
			<th>level</th>
			<th style='width:90px; text-align:center;'>Action</th></tr>";
    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);
      $tampil = mysql_query("SELECT * FROM rb_users where level != 'superuser' ORDER BY id_user ASC LIMIT $posisi,$batas");
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      echo "<tr bgcolor=$warna>
				<td>$no</td>
				<td>$r[aemail]</td>
                <td>$r[nama_lengkap]</td>
                <td>$r[jenis_kelamin]</td>
                <td>$r[level]</td>
		        <td><center>
					<a class='btn btn-success' title='Edit Data' href=?module=home&id_user=$r[id_user]><i class='icon-edit icon-white'></i> Edit</a></center>
				</td></tr>";
      $no++;
    }

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM rb_mata_pelajaran"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

		echo "</table><br/><hr>";
		echo "</li></ul>
			  <div style='float:left; margin-top:-20px;' class='pagination'>
			  <ul>
				$linkHalaman
			</ul>
		</div>";
}

elseif ($_GET[module]=='hpage'){
  include "modul/mod_home/home.php";
}

elseif ($_GET[module]=='raport'){
  include "modul/mod_raport/raport.php";
}

elseif ($_GET[module]=='transkrip'){
  include "modul/mod_transkrip/transkrip.php";
}

elseif ($_GET[module]=='predikat'){
  include "modul/mod_predikat/predikat.php";
}

elseif ($_GET[module]=='kelas'){
  include "modul/mod_kelas/kelas.php";
}

elseif ($_GET[module]=='jadwal'){
  include "modul/mod_jadwal/jadwal.php";
}

elseif ($_GET[module]=='nilai'){
  include "modul/mod_nilai/nilai.php";
}

elseif ($_GET[module]=='lapnilai'){
  include "modul/mod_lapnilai/lapnilai.php";
}

elseif ($_GET[module]=='absensiswa'){
  include "modul/mod_absensiswa/absensiswa.php";
}

elseif ($_GET[module]=='absenguru'){
  include "modul/mod_absenguru/absenguru.php";
}

elseif ($_GET[module]=='prosedur'){
  include "modul/mod_prosedur/prosedur.php";
}

elseif ($_GET[module]=='mapel'){
  include "modul/mod_mapel/mapel.php";
}

elseif ($_GET[module]=='siswabaru'){
  include "modul/mod_siswa/siswa.php";
}

elseif ($_GET[module]=='guru'){
  include "modul/mod_guru/guru.php";
}

elseif ($_GET[module]=='members'){
  include "modul/mod_members/members.php";
}

elseif ($_GET[module]=='data'){
  include "modul/mod_data/data.php";
}

elseif ($_GET[module]=='status'){
  include "modul/mod_status/status.php";
}

elseif ($_GET[module]=='formulir'){
  include "modul/mod_jenis/jenis.php";
}

else{

	if ($_SESSION[level]=='guru'){
	include 'modul/mod_guru/home.php';
	}
include 'modul/mod_home/home.php';
}
?>
