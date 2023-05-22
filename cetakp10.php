<?php
include 'koneksidb.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA PESERTA DIDIK BARU</title>
</head>

<body>
    <h1>DATA PESERTA DIDIK BARU</h1>
    <br>
    <!-- Menampilkan Data -->
    <table border="1" width="100%">
        <th>No.</th>
        <th>Tanggal Pengisian</th>
        <th>Jenis Pendaftaran</th>
        <th>Tanggal Masuk Sekolah</th>
        <th>NIS</th>
        <th>No. Peserta Ujian</th>
        <th>Apakah Pernah PAUD</th>
        <th>Apakah Pernah TK</th>
        <th>No. Seri SKHUN Sebelumnya</th>
        <th>No. Seri Ijazah Sebelumnya</th>
        <th>Hobi</th>
        <th>Cita-cita</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>NISN</th>
        <th>NIK</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Berkebutuhan Khusus</th>
        <th>Alamat</th>
        <th>RT</th>
        <th>RW</th>
        <th>Nama Dusun</th>
        <th>Nama Kelurahan</th>
        <th>Kecamatan</th>
        <th>Kode Pos</th>
        <th>Tempat Tinggal</th>
        <th>Moda Transportasi</th>
        <th>Nomor HP</th>
        <th>Nomor Telepon</th>
        <th>Email Pribadi</th>
        <th>Penerima KPS/PKH/KIP</th>
        <th>No. KPS/KKS/PKH/KIP</th>
        <th>Kewarganegaraan</th>
        <th>Nama Ayah</th>
        <th>Tahun Lahir</th>
        <th>Pendidikan Ayah</th>
        <th>Pekerjaan Ayah</th>
        <th>Penghasilan Bulanan</th>
        <th>Berkebutuhan Khusus</th>
        <th>Nama Ibu</th>
        <th>Tahun Lahir</th>
        <th>Pendidikan Ibu</th>
        <th>Pekerjaan Ibu</th>
        <th>Penghasilan Bulanan</th>
        <th>Berkebutuhan Khusus</th>

        <?php
        $sqlRegistrasiPeserta = mysqli_query($koneksi, "SELECT * FROM registrasipeserta");
        $sqlDataPribadi = mysqli_query($koneksi, "SELECT * from datapribadi");
        $sqlDataAyah = mysqli_query($koneksi, "SELECT * FROM dataayah");
        $sqlDataIbu = mysqli_query($koneksi, "SELECT * FROM dataibu");
        $no = 1;
        while ($row = mysqli_fetch_array($sqlRegistrasiPeserta)) {
            echo "<tr>";
            echo "<th>$no</th>";
            echo "<td align = 'center'>" . $row['tanggalpengisian'] . "</td>";
            echo "<td align = 'center'>" . $row['jenispendaftaran'] . "</td>";
            echo "<td align = 'center'>" . $row['tglmasuksekolah'] . "</td>";
            echo "<td align = 'center'>" . $row['NIS'] . "</td>";
            echo "<td align = 'center'>" . $row['nopesertaujian'] . "</td>";
            echo "<td align = 'center'>" . $row['pernahPAUD'] . "</td>";
            echo "<td align = 'center'>" . $row['pernahTK'] . "</td>";
            echo "<td align = 'center'>" . $row['noseriskhun'] . "</td>";
            echo "<td align = 'center'>" . $row['noseriijazah'] . "</td>";
            echo "<td align = 'center'>" . $row['hobi'] . "</td>";
            echo "<td align = 'center'>" . $row['cita_cita'] . "</td>";

            $rowPribadi = mysqli_fetch_array($sqlDataPribadi);
            echo "<td align = 'center'>" . $rowPribadi['namalengkap'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['jeniskelamin'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['NISN'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['NIK'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['tempatlahir'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['tgllahir'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['agama'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['berkebutuhankhusus'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['alamat'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['RT'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['RW'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['namadusun'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['namakelurahan'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['kecamatan'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['kodepos'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['tempattinggal'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['transportasi'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['noHP'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['notelp'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['penerimaKIP'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['noKIP'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['kewarganegaraan'] . "</td>";
            echo "<td align = 'center'>" . $rowPribadi['namanegara'] . "</td>";

            $rowAyah = mysqli_fetch_array($sqlDataAyah);
            echo "<td align = 'center'>" . $rowAyah['namaayah'] . "</td>";
            echo "<td align = 'center'>" . $rowAyah['tahunlahirayah'] . "</td>";
            echo "<td align = 'center'>" . $rowAyah['pendidikanayah'] . "</td>";
            echo "<td align = 'center'>" . $rowAyah['pekerjaanayah'] . "</td>";
            echo "<td align = 'center'>" . $rowAyah['penghasilanayah'] . "</td>";
            echo "<td align = 'center'>" . $rowAyah['berkebutuhankhususayah'] . "</td>";

            $rowIbu = mysqli_fetch_array($sqlDataIbu);
            echo "<td align = 'center'>" . $rowIbu['namaibu'] . "</td>";
            echo "<td align = 'center'>" . $rowIbu['tahunlahiribu'] . "</td>";
            echo "<td align = 'center'>" . $rowIbu['pendidikanibu'] . "</td>";
            echo "<td align = 'center'>" . $rowIbu['pekerjaanibu'] . "</td>";
            echo "<td align = 'center'>" . $rowIbu['penghasilanibu'] . "</td>";
            echo "<td align = 'center'>" . $rowIbu['berkebutuhankhususibu'] . "</td>";
            $no++;

            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <button><a href="reportexcelpesertadidik.php">EXPORT EXCEL</a></button>
</body>

</html>