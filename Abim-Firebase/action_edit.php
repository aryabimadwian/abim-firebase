<style>
   .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
   }

   table {
      border-collapse: collapse;
      width: 100%;
   }

   th,
   td {
      text-align: left;
      padding: 8px;
   }

   tr:nth-child(even) {
      background-color: #f2f2f2;
   }
</style>
<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];
$update = $db->update("pendaftar", $id, [
   "no_pendaftar"     => $_POST['no_pendaftar'],
   "prodi" => $_POST['prodi'],
   "nama"      => $_POST['nama'],
   "jk"    => $_POST['jk'],
   "tempat_lahir"    => $_POST['tempat_lahir'],
   "tgl_lahir"    => $_POST['tgl_lahir'],
   "agama"    => $_POST['agama'],
   "alamat"    => $_POST['alamat'],
   "no_hp"    => $_POST['no_hp'],
   "email"    => $_POST['email']
]);

echo "data updated";

echo "<br>";
echo '<a href="index.php"><button class="button">Back To Home</button></a>';
