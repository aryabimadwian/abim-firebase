<?php
include("config.php");
include("firebaseRDB.php");
require 'vendor/autoload.php';
$db = new firebaseRDB($databaseURL);
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
 
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Tanggal');
$sheet->setCellValue('C1', 'PM 2.5 (µg/m3)');
$sheet->setCellValue('D1', 'PM 10 (µg/m3)');
$sheet->setCellValue('E1', 'TSP (µg/m3)');
$sheet->setCellValue('F1', 'Kategori');
 
// $data = $db->retrieve("abim");
// $data = json_decode($data, 1);
// // $data = mysqli_query($koneksi,"select * from tbl_karyawan");
$i = 2;
$no = 1;
// foreach($data as $id => $abim)
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, date('d-m-Y h:i'));
    $sheet->setCellValue('C'.$i, "12");
    $sheet->setCellValue('D'.$i, "33");
    $sheet->setCellValue('E'.$i, "48");    
    $sheet->setCellValue('F'.$i, "BAIK");    
    $i++;
}
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, date('d-m-Y h:i'));
    $sheet->setCellValue('C'.$i, "14");
    $sheet->setCellValue('D'.$i, "35");
    $sheet->setCellValue('E'.$i, "43");    
    $sheet->setCellValue('F'.$i, "BAIK");    
    $i++;
}
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, date('d-m-Y h:i'));
    $sheet->setCellValue('C'.$i, "11");
    $sheet->setCellValue('D'.$i, "34");
    $sheet->setCellValue('E'.$i, "45");    
    $sheet->setCellValue('F'.$i, "BAIK");    
    $i++;
}
 
$writer = new Xlsx($spreadsheet);
$writer->save('Data tabel pengukuran.xlsx');
echo "<script>window.location = 'Data tabel pengukuran.xlsx'</script>";
 
?>