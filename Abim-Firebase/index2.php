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
?>
<title>Simple Firebase RDB CRUD</title>
<link rel="stylesheet" href="style.css">
<a href="add.php"><button class="button">ADD DATA</button></a><br><br>
<div style="overflow-x: auto;">
    <table border="1" width="100%">
        <tr align="center" bgcolor="#dddddd" ;>
            <td>No</td>
            <td>No Pendaftaran</td>
            <td>Program Studi yang Dipilih</td>
            <td>Nama Siswa</td>
            <td>Jenis Kelamin</td>
            <td>Tempat Lahir</td>
            <td>Tanggal Lahir</td>
            <td>Agama</td>
            <td>Alamat Lengkap</td>
            <td>No Telpon</td>
            <td>Email</td>
            <td colspan="2">Action</td>
        </tr>
        <?php
      $data = $db->retrieve("pendaftar");
      $data = json_decode($data, 1);

      if (is_array($data)) {
         foreach ($data as $id => $pendaftar) {
            echo "<tr>
         <td>{$pendaftar['no_pendaftar']}</td>
         <td>{$pendaftar['prodi']}</td>
         <td>{$pendaftar['nama']}</td>
         <td>{$pendaftar['jk']}</td>
         <td>{$pendaftar['tempat_lahir']}</td>
         <td>{$pendaftar['tgl_lahir']}</td>
         <td>{$pendaftar['agama']}</td>
         <td>{$pendaftar['alamat']}</td>
         <td>{$pendaftar['no_hp']}</td>
         <td>{$pendaftar['email']}</td>
         <td><a href='edit.php?id=$id'>EDIT</a></td>
         <td><a href='delete.php?id=$id'>DELETE</a></td>
      </tr>";
         }
      }
      ?>
    </table>
</div>