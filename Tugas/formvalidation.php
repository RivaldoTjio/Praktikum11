<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning {color: #FF0000;}
	</style>
</head>
<body>
	<?php

	$error_nama = "";
	$error_jenis_k = "";
	$error_nisn = "";
	$error_nik = "";
	$error_tempatlahir = "";
	$error_tgl =  "";
	$error_bln = "";
	$error_thn = "";
	$error_akta = "";
	$error_agama = "";
	$error_kewarganegaraan = "";
	$error_asalnegara = "";
	$error_khusus = "";
	$error_jalan = "";
	$error_rt = "";
	$error_rw = "";
	$error_dusun = "";
	$error_desa = "";
	$error_kecamatan = "";
	$error_kodepos = "";
	$error_tempattinggal = "";
	$error_transportasi = "";
	$error_kks = "";
	$error_anakke = "";
	$error_pkh = "";
	$error_nopkh = "";
	$error_email ="";
	$error_web = "";
	$error_pesan ="";
	$error_telp ="";


	$nama = "";
	$jk = "";
	$nisn = "";
	$nik = "";
	$tempatlahir = "";
	$tgl = "";
	$bln = "";
	$thn = "";
	$tgllahir = "";
	$akta = "";
	$agama = "";
	$kewarganegaraan = "";
	$asalnegara  = "";
	$Khusus = "";
	$jalan = "";
	$rt = "";
	$rw = "";
	$dusun = "";
	$desa = "";
	$kecamatan = "";
	$kodepos = "";
	$tempattinggal= "";
	$transportasi = "";
	$kks= "";
	$anakke = "";
	$pkh = "";
	$nopkh = "";
	$email = "";
	$web = "";
	$pesan = "";
	$telp = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["nama"])) {
			$error_nama = "Nama tidak boleh kososng";
		}
		else {
			$nama = cek_input($_POST["nama"]);
			if (!preg_match("/^[a-zA-Z ]*S/", $nama)) {
				$nameErr = "Inputan Hanya boleh hururf dan spasi";
			}
		}

		if (empty($_POST["jenis_kelamin"])) {
			$error_jenis_k = "Jenis Kelamin Tidak Boleh Kosong";
		}
		else {
			$jk = $_POST["jenis_kelamin"];
		}

		if (empty($_POST["nisn"])) {
			$error_nisn = "NISN Tidak Boleh Kosong !";
		}
		else {
			$nisn = cek_input($_POST["nisn"]);
	
		}

		if (empty($_POST["nik"])) {
			$error_nik = "NIK Tidak Boleh Kosong";
		}
		else {
			$nik = cek_input($_POST["nik"]);
			
		}

		if (empty($_POST["tempatlahir"])) {
			$error_tempatlahir = "Tempat Lahir Tidak Boleh Kosong";
		}
		else {
			$tempatlahir = cek_input($_POST["tempatlahir"]);
			if (!preg_match("/^[a-zA-Z ]*S/", $tempatlahir)) {
				$nameErr = "Inputan Hanya boleh hururf dan spasi";
			}
		}

		//tanggal lahir
		if (empty($_POST["tgl"]) || empty($_POST["bln"] || empty($_POST["thn"]))) {
			$error_tgl = "Tanggal Lahir Tidak Boleh Kosong";
		}
		else {

			$tgllahir = $_POST["thn"].'-'.$_POST["bln"].'-'.$_POST["tgl"];
		}

		if (empty($_POST["akta"])) {
			$error_akta = "No Akta Tidak Boleh Kosong ! ";
		}
		else {
			$akta = cek_input($_POST["akta"]);
			}

		//agama

		$agama = $_POST["agama"];

		//kewarganegaraan
		
		if (empty($_POST["kewarganegaraan"])) {
			$error_kewarganegaraan = "Kewarganegaraan Tidak Boleh Kosong";
			if ($_POST["kewarganegaraan"]== "WNA") {
				if (empty($_POST["asalnegara"])) {
					$error_asalnegara = "Asal Negara Tidak Boleh Kosong ! ";
				} 
				else {
					$asalnegara = cek_input($_POST["asalnegara"]);
				}
			}
		}
		else {
			$kewarganegaraan = $_POST["kewarganegaraan"];
		}


		//kebutuhan khusus
		$Khusus = $_POST["khusus"];

		if (empty($_POST["jalan"])) {
			$error_jalan = "Alamat jalan tidak boleh kosong ! ";
		}
		else {
			$jalan = cek_input($_POST["jalan"]);
			
		}

		if (empty($_POST["rt"])) {
			$error_rt = "RT tidak boleh kosong ! ";
		}
		else {
			$rt = cek_input($_POST["rt"]);
		}

		if (empty($_POST["rw"])) {
			$error_rw = "RW tidak boleh kosong ! ";
		}
		else {
			$rw = cek_input($_POST["rw"]);
		}


		if (empty($_POST["desa"])) {
			$error_desa = "Desa Tidak Boleh Kosong ! ";
		}
		else {
			$desa = cek_input($_POST["desa"]);
			if (!preg_match("/^[a-zA-Z ]*S/", $desa)) {
				$nameErr = "Inputan Hanya boleh hururf dan spasi";
			}
		}

		if (empty($_POST["kecamatan"])) {
			$error_kecamatan = "Kecamatan Tidak Boleh Kosong ! ";
		}
		else {
			$kecamatan = cek_input($_POST["kecamatan"]);
			if (!preg_match("/^[a-zA-Z ]*S/", $kecamatan)) {
				$nameErr = "Inputan Hanya boleh hururf dan spasi";
			}
		}

		if (empty($_POST["kodepos"])) {
			$error_kodepos = "Kode Pos Tidak Boleh Kosong !";
		}
		else {
			$kodepos = cek_input($_POST["kodepos"]);
		} 
		//tempat tinggal
		if (empty($_POST["tempattinggal"])) {
			$error_tempattinggal = "Status Tempat Tinggal Tidak Boleh Kosong !";
		}
		else {
			$tempattinggal = cek_input($_POST["tempattinggal"]);
		} 

		$transportasi = $_POST["transportasi"];
		$kks = $_POST["kks"];

		if (empty($_POST["anakke"])) {
			$error_kodepos = "Anak Ke Tidak Boleh Kosong !";
		}
		else {
			$anakke = cek_input($_POST["anakke"]);
		}

		if (empty($_POST["pkh"])) {
			$error_pkh = "Tidak Boleh Kosong";
		}
		else {
			if ($_POST["pkh"] == "Ya") {
				$pkh = true;
			} else {
				$pkh = false;
			}
			
		}
		$nopkh=$_POST["nopkh"];


$host="localhost";
$username="root";
$password="";
$namadb ="datasiswa";
try {
$conn = mysqli_connect($host, $username, $password, $namadb) or die("Koneksi gagal dibangun");
$sql = "INSERT INTO `data`(`nama`, `jenis_kelamin`, `nisn`, `nik`, `tempatlahir`, `tgl_lahir`, `akta_lahir`, `agama`, `keb_khusus`, `jalan`, `rt`, `rw`, `desa`, `kecamatan`, `kodepos`, `status_tempat`, `transportasi`, `kks`, `anak_ke`, `pkh`, `nopkh`) VALUES ('$nama','$jk','$nisn','$nik','$tempatlahir','$tgllahir','$akta','$agama','$Khusus','$jalan','$rt','$rw','$desa','$kecamatan','$kodepos','$tempattinggal','$transportasi','$kks',$anakke,'$pkh','$nopkh');";
mysqli_query($conn,$sql);
mysqli_close($conn);	
} catch (Exception $e) {
	echo $e;
	
}

}
	function cek_input($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	function export(){
		include('reportexcel.php');
	
	}

	?>
	

<div class="row">
<div class="col-md-6">
<div class="card">
	<div class="card-header">
		Form Pendaftaran Peserta Didik
	</div>
	<div class="card-body">
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
		<div class="col-sm-10">
		<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : "");?>" id="nama" placeholder="Nama" value="<?php echo $nama;?>"><span class="warning"><?php echo $error_nama;?></span>
		</div>
		</div>
		<div class="form-group row">
			<label for="jenis_kelamin" class="col-sm-2 col-from-label">Jenis Kelamin</label>
			<div class="col-sm-5">
			<input type="radio" id="Laki" name="jenis_kelamin" value="Laki-Laki">
			<label for="Laki">Laki-Laki</label><br>
			</div>
			<div class="col-sm-5">
			
			<input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
			<label for="perempuan">Perempuan</label><br>
			
			</div>
			<span class="warning"><?php echo $error_jenis_k; ?></span>
		</div>
		<div class="form-group row">
			<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
		<div class="col-sm-10">
			<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
		</div>
		</div>
		<div class="form-group row">
			<label for="nik" class="col-sm-2 col-form-label">NIK / No.KITAS</label>
			<div class="col-sm-10">
				<input type="number" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik;?>"><span class="warning"><?php echo $error_nik; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
			<div class="col-sm-10">
				<input type="text" name="tempatlahir" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="tempatlahir" placeholder="Tempat Kelahiran" value="<?php echo $tempatlahir;?>"><span class="warning"><?php echo $error_tempatlahir; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
			<div class="col-sm-2">
				<input type="number" min="1" max="31" name="tgl" class="form-control <?php echo($error_tgl !="" ? "is-invalid" : ""); ?>" id="tgl" placeholder="DD" value="<?php echo $tgl;?>">
			</div>
			<div class="col-sm-2">
				<input type="number" min="1" max="12" name="bln" class="form-control <?php echo($error_bln !="" ? "is-invalid" : ""); ?>" id="bln" placeholder="MM" value="<?php echo $bln;?>">
			</div>
			<div class="col-sm-2">
				<input type="number" min="1980" max="2020" name="thn" class="form-control <?php echo($error_bln !="" ? "is-invalid" : ""); ?>" id="Tahun" placeholder="YYYY" value="<?php echo $thn;?>">
			</div>
			<span class="warning"><?php echo $error_tgl; ?></span>
		</div>

		<div class="form-group row">
			<label for="akta" class="col-sm-2 col-form-label">No Akta Lahir</label>
			<div class="col-sm-10">
				<input type="text" name="akta" class="form-control <?php echo($error_akta !="" ? "is-invalid" : ""); ?>" id="akta" placeholder="No.Akta" value="<?php echo $akta;?>"><span class="warning"><?php echo $error_akta; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="agama" class="col-sm-2 col-form-label">Agama</label>
			<div class="col-sm-10">
				<select class="form-control <?php echo($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" name = "agama">
					<option value="" selected= "selected">---Pilih Kategori---</option>
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen Protestan</option>
					<option value="Katolik">Katolik</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>
					<option value="Konghucu">Konghucu</option>
					<option value="Aliran">Aliran Kepercayaan</option>
				</select>
			</div>
		</div>	

		<div class="form-group row">
			<label for="kewarganegaraan" class="col-sm-2 col-from-label">Kewarganegaraan</label>
			<div class="col-sm-2">
			<input type="radio" id="wni" name="kewarganegaraan" value="WNI">
			<label for="wni">WNI</label><br>
			</div>
			<div class="col-sm-2">
			<input type="radio" id="wna" name="kewarganegaraan" value="WNA">
			<label for="wna">WNA</label><br>
			</div>
			<div class="col-sm-5">
				<input type="text" name="asalnegara" class="form-control  <?php echo($error_asalnegara !="" ? "is-invalid" : ""); ?>" id="asalnegara" placeholder="Asal Negara Untuk WNA">
			</div>
			<span class="warning"><?php echo $error_kewarganegaraan;?></span>
		</div>

		<div class="form-group row">
			<label for="kebutuhankhusus" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
			<div class="col-sm-10">
				<select class="form-control <?php echo($error_khusus !="" ? "is-invalid" : ""); ?>" id="kebutuhankhusus" name="khusus">
					<option selected="selected" value="">-</option>
					<option value="Tunanetra">Tunanetra</option>
					<option value="Tunarungu">Tunarungu</option>
					<option value="Tunawicara">Tunawicara</option>
					<option value="Tunagrahita">Tunagrahita</option>
					<option value="Tunadaksa">Tunadaksa</option>
					<option value="Tunalaras">Tunalaras</option>
					<option value="Berkesulitan Belajar">Berkesulitan belajar</option>
					<option value="Lamban Belajar">Lamban belajar</option>
					<option value="Autis">Autis</option>
					<option value="Gangguan motorik">Gangguan motorik</option>
					<option value="lain-lain">Gangguan Lainnya</option>
					
				</select>
				<span class="warning"><?php echo $error_khusus; ?></span>
			</div>
			
		</div>

		<div class="form-group row">
			<label for="jalan" class="col-sm-2 col-form-label">Alamat Jalan</label>
			<div class="col-sm-10">
				<input type="text" name="jalan" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="jalan" placeholder="Alamat Jalan & Nomor Rumah" value="<?php echo $jalan;?>"><span class="warning"><?php echo $error_jalan; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="rt" class="col-sm-2 col-form-label">RT</label>
			<div class="col-sm-2">
				<input type="number" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt;?>"><span class="warning"><?php echo $error_rt; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="rw" class="col-sm-2 col-form-label">RW</label>
			<div class="col-sm-2">
				<input type="number" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw;?>"><span class="warning"><?php echo $error_rw; ?></span>
			</div>
		</div>


		<div class="form-group row">
			<label for="desa" class="col-sm-2 col-form-label">Kelurahan / Desa</label>
			<div class="col-sm-10">
				<input type="text" name="desa" class="form-control <?php echo($error_desa !="" ? "is-invalid" : ""); ?>" id="desa" value="<?php echo $desa;?>"><span class="warning"><?php echo $error_desa; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
			<div class="col-sm-10">
				<input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="" value="<?php echo $kecamatan;?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
			<div class="col-sm-10">
				<input type="number" name="kodepos" class="form-control <?php echo($error_kodepos !="" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="" value="<?php echo $kodepos;?>"><span class="warning"><?php echo $error_kodepos; ?></span>
			</div>
		</div>

		<div class="form-group row">    
			<label for="tempattinggal" class="col-sm-4 col-form-label"> Tempat Tinggal </label>
			<div class="col-sm-8">
			<select class="form-control <?php echo ($error_tempattinggal !="" ? "is-invalid" : "");?>" id="tempattinggal" name="tempattinggal">
				<option value="">--Pilih Kategori--</option>
                <option value="Bersama Orang Tua">1. Bersama Orang Tua</option>
                <option value="Wali">2. Wali</option>
                <option value="Kos">3. Kos</option>
                <option value="Asrama">4. Asrama</option>
                <option value="Panti Asuhan">5. Panti Asuhan</option>
                <option value="Lainnya">6. Lainnya</option>
			</select>
			<span class="warning"><?php echo $error_tempattinggal;?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="transportasi" class="col-sm-2 col-form-label">Transportasi</label>
			<div class="col-sm-10">
				<select class="form-control <?php echo($error_transportasi !="" ? "is-invalid" : ""); ?>" id="transportasi" name="transportasi">
					<option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
					<option value="Angkutan Umum">Angkutan Umum</option>
				</select>
			</div>
		</div>	

		<div class="form-group row">
			<label for="kks" class="col-sm-2 col-form-label">Nomor KKS</label>
			<div class="col-sm-10">
				<input type="number" name="kks" class="form-control <?php echo($error_kks !="" ? "is-invalid" : ""); ?>" id="kks" placeholder="" value="<?php echo $kks;?>"><span class="warning"><?php echo $error_kks; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="anakke" class="col-sm-2 col-form-label">Anak Ke</label>
			<div class="col-sm-2">
				<input type="number" name="anakke" class="form-control <?php echo($error_anakke !="" ? "is-invalid" : ""); ?>" id="anakke" placeholder="" value="<?php echo $anakke;?>"><span class="warning"><?php echo $error_anakke; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="pkh" class="col-sm-2 col-from-label">Penerima KPS/PKH</label>
			<div class="col-sm-2">
			<input type="radio" id="pkh" name="pkh" value="Ya">
			<label for="ppkh">Ya</label><br>
			</div>
			<div class="col-sm-2">
			<input type="radio" id="pkh" name="pkh" value="Tidak">
			<label for="pkh">Tidak</label><br>
			</div>
		</div>

		<div class="form-group row">
			<label for="nopkh" class="col-sm-2 col-form-label">Nomor KPS / PKH</label>
			<div class="col-sm-10">
				<input type="number" name="nopkh" class="form-control <?php echo($error_nopkh !="" ? "is-invalid" : ""); ?>" id="nopkh" placeholder="" value="<?php echo $nopkh;?>"><span class="warning"><?php echo $error_nopkh; ?></span>
			</div>
		</div>

		
		<div class="form-group row">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary">Kirim</button>
			</div>
		</div>
	</form>
	<form action="reportexcel.php">
	<button class="btn btn-primary" type="submit">Export Data</button>	
	</form>
	
</div>
</div>
</div>
</div>


</body>
</html>