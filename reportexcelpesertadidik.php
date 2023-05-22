<?php
include 'koneksidb.php';
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet    = new Spreadsheet();
$sheet          = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A2','DATA PESERTA DIDIK BARU');
$sheet->mergeCells('A2:AV2');

$sheet->setCellValue('A3','REGISTRASI PESERTA');
$sheet->mergeCells('A3:L3');

$sheet->setCellValue('M3','DATA PRIBADI');
$sheet->mergeCells('M3:AJ3');

$sheet->setCellValue('AK3','DATA AYAH');
$sheet->mergeCells('AK3:AP3');

$sheet->setCellValue('AQ3','DATA IBU');
$sheet->mergeCells('AQ3:AV3');

$sheet->setCellValue('A4','No.');
$sheet->setCellValue('B4','Tanggal Pengisian');
$sheet->setCellValue('C4','Jenis Pendaftaran');
$sheet->setCellValue('D4','Tanggal Masuk Sekolah');
$sheet->setCellValue('E4','NIS');
$sheet->setCellValue('F4','No. Peserta Ujian');
$sheet->setCellValue('G4','Apakah Pernah PAUD');
$sheet->setCellValue('H4','Apakah Pernah TK');
$sheet->setCellValue('I4','No. Seri SKHUN Sebelumnya');
$sheet->setCellValue('J4','No. Seri Ijazah Sebelumnya');
$sheet->setCellValue('K4','Hobi');
$sheet->setCellValue('L4','Cita-cita');
$sheet->setCellValue('M4','Nama Lengkap');
$sheet->setCellValue('N4','Jenis Kelamin');
$sheet->setCellValue('O4','NISN');
$sheet->setCellValue('P4','NIK');
$sheet->setCellValue('Q4','Tempat Lahir');
$sheet->setCellValue('R4','Tanggal Lahir');
$sheet->setCellValue('S4','Agama');
$sheet->setCellValue('T4','Berkebutuhan Khusus');
$sheet->setCellValue('U4','Alamat');
$sheet->setCellValue('V4','RT');
$sheet->setCellValue('W4','RW');
$sheet->setCellValue('X4','Nama Dusun');
$sheet->setCellValue('Y4','Nama Kelurahan');
$sheet->setCellValue('Z4','Kecamatan');
$sheet->setCellValue('AA4','Kode Pos');
$sheet->setCellValue('AB4','Tempat Tinggal');
$sheet->setCellValue('AC4','Moda Transportasi');
$sheet->setCellValue('AD4','Nomor HP');
$sheet->setCellValue('AE4','Nomor Telepon');
$sheet->setCellValue('AF4','Email Pribadi');
$sheet->setCellValue('AG4','Penerima KPS/PKH/KIP');
$sheet->setCellValue('AH4','No. KPS/KKS/PKH/KIP');
$sheet->setCellValue('AI4','Kewarganegaraan');
$sheet->setCellValue('AJ4','Nama Negara');
$sheet->setCellValue('AK4','Nama Ayah');
$sheet->setCellValue('AL4','Tahun Lahir Ayah');
$sheet->setCellValue('AM4','Pendidikan Ayah');
$sheet->setCellValue('AN4','Pekerjaan Ayah');
$sheet->setCellValue('AO4','Penghasilan Bulanan');
$sheet->setCellValue('AP4','Berkebutuhan Khusus');
$sheet->setCellValue('AQ4','Nama Ibu');
$sheet->setCellValue('AR4','Tahun Lahir Ibu');
$sheet->setCellValue('AS4','Pendidikan Ibu');
$sheet->setCellValue('AT4','Pekerjaan Ibu');
$sheet->setCellValue('AU4','Penghasilan Bulanan');
$sheet->setCellValue('AV4','Berkebutuhan Khusus');

$sql = mysqli_query($koneksi,"SELECT * FROM registrasipeserta");
$i  = 5;
$no = 1;
while ($row = mysqli_fetch_array($sql)) {
    $sheet->setCellValue('A'.$i,$no++);
    $sheet->setCellValue('B'.$i,$row['tanggalpengisian']);
    $sheet->setCellValue('C'.$i,$row['jenispendaftaran']);
    $sheet->setCellValue('D'.$i,$row['tglmasuksekolah']);
    $sheet->setCellValue('E'.$i,$row['NIS']);
    $sheet->setCellValue('F'.$i,$row['nopesertaujian']);
    $sheet->setCellValue('G'.$i,$row['pernahPAUD']);
    $sheet->setCellValue('H'.$i,$row['pernahTK']);
    $sheet->setCellValue('I'.$i,$row['noseriskhun']);
    $sheet->setCellValue('J'.$i,$row['noseriijazah']);
    $sheet->setCellValue('K'.$i,$row['hobi']);
    $sheet->setCellValue('L'.$i,$row['cita_cita']);
    $i++;
}

$sql = mysqli_query($koneksi,"SELECT * FROM datapribadi");
$i  = 5;
$no = 1;
while ($row = mysqli_fetch_array($sql)) {
    $sheet->setCellValue('M'.$i,$row['namalengkap']);
    $sheet->setCellValue('N'.$i,$row['jeniskelamin']);
    $sheet->setCellValue('O'.$i,$row['NISN']);
    $sheet->setCellValue('P'.$i,$row['NIK']);
    $sheet->setCellValue('Q'.$i,$row['tempatlahir']);
    $sheet->setCellValue('R'.$i,$row['tgllahir']);
    $sheet->setCellValue('S'.$i,$row['agama']);
    $sheet->setCellValue('T'.$i,$row['berkebutuhankhusus']);
    $sheet->setCellValue('U'.$i,$row['alamat']);
    $sheet->setCellValue('V'.$i,$row['RT']);
    $sheet->setCellValue('W'.$i,$row['RW']);
    $sheet->setCellValue('X'.$i,$row['namadusun']);
    $sheet->setCellValue('Y'.$i,$row['namakelurahan']);
    $sheet->setCellValue('Z'.$i,$row['kecamatan']);
    $sheet->setCellValue('AA'.$i,$row['kodepos']);
    $sheet->setCellValue('AB'.$i,$row['tempattinggal']);
    $sheet->setCellValue('AC'.$i,$row['transportasi']);
    $sheet->setCellValue('AD'.$i,$row['noHP']);
    $sheet->setCellValue('AE'.$i,$row['notelp']);
    $sheet->setCellValue('AF'.$i,$row['email']);
    $sheet->setCellValue('AG'.$i,$row['penerimaKIP']);
    $sheet->setCellValue('AH'.$i,$row['noKIP']);
    $sheet->setCellValue('AI'.$i,$row['kewarganegaraan']);
    $sheet->setCellValue('AJ'.$i,$row['namanegara']);
    $i++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM dataayah");
$i  = 5;
$no = 1;
while ($row = mysqli_fetch_array($sql)) {
    $sheet->setCellValue('AK'.$i,$row['namaayah']);
    $sheet->setCellValue('AL'.$i,$row['tahunlahirayah']);
    $sheet->setCellValue('AM'.$i,$row['pendidikanayah']);
    $sheet->setCellValue('AN'.$i,$row['pekerjaanayah']);
    $sheet->setCellValue('AO'.$i,$row['penghasilanayah']);
    $sheet->setCellValue('AP'.$i,$row['berkebutuhankhususayah']);
    $i++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM dataibu");
$i  = 5;
$no = 1;
while ($row = mysqli_fetch_array($sql)) {
    $sheet->setCellValue('AQ'.$i,$row['namaibu']);
    $sheet->setCellValue('AR'.$i,$row['tahunlahiribu']);
    $sheet->setCellValue('AS'.$i,$row['pendidikanibu']);
    $sheet->setCellValue('AT'.$i,$row['pekerjaanibu']);
    $sheet->setCellValue('AU'.$i,$row['penghasilanibu']);
    $sheet->setCellValue('AV'.$i,$row['berkebutuhankhususibu']);
    $i++;
}

$styleArray = [
    'borders'=>[
        'allBorders'=>[
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$sheet->getStyle('A3:L3')->applyFromArray($styleArray);
$sheet->getStyle('M3:AJ3')->applyFromArray($styleArray);
$sheet->getStyle('AK3:AP3')->applyFromArray($styleArray);
$sheet->getStyle('AQ3:AV3')->applyFromArray($styleArray);
$sheet->getStyle('A2:AV2')->applyFromArray($styleArray);

$i = $i - 1;
$sheet->getStyle('A4:AV'.$i)->applyFromArray($styleArray);
$sheet->getStyle('A2:AV2')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('A2:AV2')->getFont()->setBold(true);
$sheet->getStyle('A3:AV3')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('A3:AV3')->getFont()->setBold(true);
$headerCellStyle = $sheet->getStyle('A4:AV4');
$headerCellStyle->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$headerCellStyle->getFont()->setBold(true);

$sheet->getColumnDimension('A')->setWidth(5);
$sheet->getColumnDimension('B')->setWidth(18);
$sheet->getColumnDimension('C')->setWidth(18);
$sheet->getColumnDimension('D')->setWidth(24);
$sheet->getColumnDimension('E')->setWidth(12);
$sheet->getColumnDimension('F')->setWidth(24);
$sheet->getColumnDimension('G')->setWidth(20);
$sheet->getColumnDimension('H')->setWidth(20);
$sheet->getColumnDimension('I')->setWidth(25);
$sheet->getColumnDimension('J')->setWidth(25);
$sheet->getColumnDimension('K')->setWidth(15);
$sheet->getColumnDimension('L')->setWidth(15);
$sheet->getColumnDimension('M')->setWidth(20);
$sheet->getColumnDimension('N')->setWidth(20);
$sheet->getColumnDimension('O')->setWidth(18);
$sheet->getColumnDimension('P')->setWidth(20);
$sheet->getColumnDimension('Q')->setWidth(15);
$sheet->getColumnDimension('R')->setWidth(15);
$sheet->getColumnDimension('S')->setWidth(15);
$sheet->getColumnDimension('T')->setWidth(20);
$sheet->getColumnDimension('U')->setWidth(20);
$sheet->getColumnDimension('V')->setWidth(10);
$sheet->getColumnDimension('W')->setWidth(10);
$sheet->getColumnDimension('X')->setWidth(15);
$sheet->getColumnDimension('Y')->setWidth(25);
$sheet->getColumnDimension('Z')->setWidth(18);
$sheet->getColumnDimension('AA')->setWidth(14);
$sheet->getColumnDimension('AB')->setWidth(25);
$sheet->getColumnDimension('AC')->setWidth(20);
$sheet->getColumnDimension('AD')->setWidth(18);
$sheet->getColumnDimension('AE')->setWidth(19);
$sheet->getColumnDimension('AF')->setWidth(25);
$sheet->getColumnDimension('AG')->setWidth(18);
$sheet->getColumnDimension('AH')->setWidth(20);
$sheet->getColumnDimension('AI')->setWidth(18);
$sheet->getColumnDimension('AJ')->setWidth(18);
$sheet->getColumnDimension('AK')->setWidth(14);
$sheet->getColumnDimension('AL')->setWidth(25);
$sheet->getColumnDimension('AM')->setWidth(20);
$sheet->getColumnDimension('AN')->setWidth(18);
$sheet->getColumnDimension('AO')->setWidth(25);
$sheet->getColumnDimension('AP')->setWidth(25);
$sheet->getColumnDimension('AQ')->setWidth(18);
$sheet->getColumnDimension('AR')->setWidth(20);
$sheet->getColumnDimension('AS')->setWidth(18);
$sheet->getColumnDimension('AT')->setWidth(18);
$sheet->getColumnDimension('AU')->setWidth(25);
$sheet->getColumnDimension('AV')->setWidth(25);

$writer = new Xlsx($spreadsheet); // Membuat objek writer untuk menyimpan spreadsheet

$filename = 'Report Data Peserta Didik Baru.xlsx'; // Nama file spreadsheet baru
$savePath = __DIR__ . '/' . $filename; // Jalur lengkap untuk menyimpan file

$writer->save($savePath); // Menyimpan spreadsheet dengan jalur lengkap yang ditentukan

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=" . $filename);
readfile($savePath); // Mengirimkan file spreadsheet yang diunduh ke pengguna
?>