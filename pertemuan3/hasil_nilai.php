<h3 style="margin-left: 715px; padding-top: 200px">Hasil Nilai</h3>

<div style="border: 2px solid brown; width: 300px; margin-left: 600px; padding-left: 20px; height: 190px; padding-top: 20px; background-color: ivory; box-shadow: 3px 3px 2px darkorange; color: red;">
<?php

require_once 'model.php';

if( !isset($_POST["submit"]) ) {
    header("Location: index.php");
    exit;
}

$proses = $_POST["submit"];
$nama = $_POST["nama"];
$mata_kuliah = $_POST["matakuliah"];
$uts = $_POST["uts"]; 
$uas = $_POST["uas"];
$tugas = $_POST["tugas"];
$nilai_akhir = ($uts + $uas + $tugas) / 3;

echo '<span style="color: black;">Nama Siswa</span> <span style="padding-left: 10px; color: black;">:</span> ' . $nama;
echo '<br> <span style="color: black;">Mata Kuliah</span>  <span style="padding-left: 10px; color: black;">:</span> ' . $mata_kuliah;
echo '<br> <span style="color: black;">Nilai UTS</span>  <span style="padding-left: 24px; color: black;">:</span> ' . $uts;
echo '<br> <span style="color: black;">Nilai UAS</span>  <span style="padding-left: 23px; color: black;">:</span> ' . $uas;
echo '<br> <span style="color: black;">Nilai Tugas</span>  <span style="padding-left: 16px; color: black;">:</span> ' . $tugas;
echo '<br><hr style="width: 277px; margin-right: 21px; color:"> <span style="color: black;">Nilai Akhir</span>  <span style="padding-left: 17px; color: black;">:</span> ' . $nilai_akhir;
echo '<br> <span style="color: black;">Dinyatakan</span>  <span style="padding-left: 16px; color: black;">:</span> ' . kelulusan($nilai_akhir);
echo '<br> <span style="color: black;">Grade</span>  <span style="padding-left: 50px; color: black;">:</span> ' . grade($nilai_akhir);

?>
</div>