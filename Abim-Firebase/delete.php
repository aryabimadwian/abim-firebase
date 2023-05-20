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
$id = $_GET['id'];
if ($id != "") {
   $delete = $db->delete("pendaftar", $id);
   echo "data deleted";

   echo "<br>";
   echo '<a href="index.php"><button class="button">Back To Home</button></a>';
}
