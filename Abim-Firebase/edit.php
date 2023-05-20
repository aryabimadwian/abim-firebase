<style>
   input[type=text],
   select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
   }

   input[type=number],
   select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
   }

   input[type=date],
   select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
   }

   input[type=email],
   select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
   }

   input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
   }

   input[type=submit]:hover {
      background-color: #45a049;
   }

   div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
   }

   .button {
      background-color: red;
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
</style>
<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("pendaftar/$id");
$data = json_decode($retrieve, 1);

?>
<form method="post" action="action_edit.php">
   <table border="0" width="500">
      <tr>
         <td>No Pendaftar</td>
         <td>:</td>
         <td><input type="text" name="no_pendaftar" value="<?php echo $data['no_pendaftar'] ?>"></td>
      </tr>
      <tr>
         <td>Program Studi</td>
         <td>:</td>
         <td>
            <select name="prodi" id="prodi">
               <option value="<?php echo $data['prodi'] ?>">Sebelumnya -> <?php echo $data['prodi'] ?></option>
               <option value="Sistem Informasi">Sistem Informasi</option>
               <option value="Teknologi Informatika">Teknologi Informatika</option>
            </select>
         </td>
      </tr>
      <tr>
         <td>Nama Siswa</td>
         <td>:</td>
         <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
      </tr>
      <tr>
         <td>Jenis Kelamin</td>
         <td>:</td>
         <td><select name="jk" id="jk">
               <option value="<?php echo $data['jk'] ?>">Sebelumnya -> <?php echo $data['jk'] ?></option>
               <option value="Laki-Laki">Laki-Laki</option>
               <option value="Perempuan">Perempuan</option>
            </select></td>
      </tr>
      <tr>
         <td>Tempat Lahir</td>
         <td>:</td>
         <td><input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>"></td>
      </tr>
      <tr>
         <td>Tanggal Lahir</td>
         <td>:</td>
         <td><input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>"></td>
      </tr>
      <tr>
         <td>Agama</td>
         <td>:</td>
         <td><select name="agama" id="agama">
               <option value="<?php echo $data['agama'] ?>"> Sebelumnya -> <?php echo $data['agama'] ?></option>
               <option value="Islam">Islam</option>
               <option value="Kristen">Kristen</option>
               <option value="Hindu">Hindu</option>
               <option value="Budha">Budha</option>
            </select></td>
      </tr>
      <tr>
         <td>Alamat Lengkap</td>
         <td>:</td>
         <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
      </tr>
      <tr>
         <td>No Telpon</td>
         <td>:</td>
         <td><input type="number" name="no_hp" value="<?php echo $data['no_hp'] ?>"></td>
      </tr>
      <tr>
         <td>Email</td>
         <td>:</td>
         <td><input type="email" name="email" value="<?php echo $data['email'] ?>"></td>
      </tr>
      <tr>
         <td>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="SAVE">
         </td>
      </tr>
   </table>
</form>


<a href="index.php"><button class="button">Back</button></a>