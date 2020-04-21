<?php

include ('koneksi.php');
require 'C:\xampp\htdocs\reportexcel\vendor\autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$header = array('Nama','Jenis Kelamin','NISN','NIK','Tempat Lahir','Tanggal Lahir','No. Akta Kelahiran','Agama','Kebutuhan Khusus','Jalan','RT','RW','Desa','Kecamatan','Kodepos','Status Tempat Tinggal','Transportasi','KKS','Anak Ke','Penerima PKH','No PKH');
$columm = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U');
$dbcolumm = array('nama','jenis_kelamin','nisn','nik','tempatlahir','tgl_lahir','akta_lahir','agama','keb_khusus','jalan','rt','rw','desa','kecamatan','kodepos','status_tempat','transportasi','kks','anak_ke','pkh','nopkh');
//sheet headery
for ($i=0; $i <sizeof($header); $i++) { 
	# code...
	$j = 1;
	$sheet->setCellValue($columm[$i].$j, $header[$i]);
}

$query = mysqli_query($conn, "select * from data");

$indexrow = 2;
while ($row = mysqli_fetch_array($query)) {
	# code...
	for ($i=0; $i <sizeof($header); $i++) { 
		# code...
		$sheet->setCellValue($columm[$i].$indexrow, $row[$dbcolumm[$i]]);
	}

	$indexrow = $indexrow + 1;
}

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa.Xlsx');

?>