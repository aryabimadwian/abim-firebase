<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Aryabima Dwian Nugroho</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>

    <!-- <div class="container2">
            <h1>Firebase Database</h1>
            <div class="form">
                <input type="datetime" placeholder="Date" data-input="date"/>
                <input type="number" placeholder="PM 2.5 (µg/m3)" data-input="pm25"/>
                <input type="number" placeholder="PM 10 (µg/m3)" data-input="pm10"/>
                <input type="number" placeholder="TSP (µg/m3)" data-input="tsp"/>
                <input type="text" placeholder="Kategori" data-input="kategori"/>
                <button data-button="kirim">Kirim</button>
            </div>
        </div> -->

    <!-- FIREBASE PROJECT -->
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-storage.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>

    <script src="./scripts/firebase-config.js"></script>
    <script src="./scripts/script.js"></script>
    <header>
        <h1><a href="">Pemantauan Kualitas Udara</a></h1>
        <ul>
            <li><a href="add.php">Add</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#layout">Layout</a></li>
            <!-- <li><a href="#chart">Table</a></li> -->
            <li><a href="#table">Table</a></li>
            <!-- <li><a href="#contact">Contact</a></li> -->
        </ul>
    </header>

    <?php
      $data = $db->retrieve("abim");
      $data = json_decode($data, 1);
      $myarray = array($data); 
    ?>
    <?php 
    // echo json_encode($myarray);
    // die(); 
    ?>

    <!--bagian banner-->
    <section class="banner">
        <div class="container">
            <h3>Main Menu</h3>
        </div>
        <div class="col-3">
            <h2>PM 2.5</h2> <br>
        </div>

        <div class="col-3">
            <h2>PM 10</h2> <br>
        </div>

        <div class="col-3">
            <h2>TSP</h2> <br>
        </div>
        </div>
        <br>
        <div class="container">
            <div class="left-col">
                <br>
                <p>Kategori Kuning</p> <br>
            </div>
            <div class="right-col">
                <br>
                <p>Kategori Merah</p> <br>
            </div>

        </div> <br> <br>

    </section>

    <!--bagian about -->
    <section id="about">
        <div style="background-image: url('file:///D:/tugas akhir/img/airpol.jpg'); background-size: cover;">
            <div class="container">
                <center> <br> <br>
                    <p> Alat ini merupakan prototype pengukuran partikel PM 2.5, PM 10, dan TSP pada suatu area secara
                        realtime.<br>
                        Hasil pengukuran telah diklasifikasikan dengan Air Quality Index sehingga dapat mengetahui
                        kualitas udara pada area tersebut.<br>
                        Prototype ini akan diaplikasikan pada sebuah industri sehingga pekerja dapat mengetahui kualitas
                        udara pada area industri tersebut<br>
                        dan dapat dilakukan kontrol jika kualitas udara terhitung tidak sehat.</p>
                    <h1 class="nav-item">
                        <a class="nav-link" href="#about">TUGAS AKHIR</a>
                    </h1> <br>
                    <p>ARYABIMA DWIAN NUGROHO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1019040017</p>
                    <p class="square">Rancang Bangun Pemantauan PM 2.5, PM 10, dan TSP Berbasis Low Cost Sensor
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
                        Menggunakan Klasifikasi Indeks Kualitas Udara di Industri Kimia</p>
                    <p>Dosen Pembimbing:</p>
                    <p>1. Luqman Cahyono, S.Pd., M.T.<br> &nbsp;&nbsp;&nbsp;
                        2. Alma Vita Sophia, S.T., M.T.</p> <br> <br><br> <br> <br> <br> <br>
                </center>
            </div>
    </section>

    <!-- bagian layout -->
    <section id="layout">
        <div class="layout">
            <div class="layout-image">
                <img src="file:///D:/tugas%20akhir/img/alat-sensor.png" alt="keterangan gambar">
            </div>
            <div class="layout-text">
                <h2>Layout</h2>
                <p> <br>
                    Keterangan:<br>
                    1. Sensor PMS7003, berfungsi sebagai pengukur parameter PM2.5.<br>
                    2. Sensor Shinyei PPD42NS, berfungsi sebagai pengukur parameter PM10.<br>
                    3. Sensor SHARP GP2Y1010AUOF, berfungsi sebagai pengukur parameter TSP.<br>
                    4. Tombol ON/OFF, berfungsi untuk mengontrol status sensor (aktif atau mati)<br>
                    5. LED, berfungsi sebagai indikator status warna hasil klasifikasi AQI atau ISPU<br>
                    6. LCD I2C 20x4, berfungsi sebagai tampilan dari hasil pengukuran.<br>
                    7. Jalur udara masuk, berfungsi sebagai jalan masuk udara agar dapat diukur sensor<br>
                    8. Jalur udara keluar, berfungsi sebagai jalan keluar udara setelah diukur oleh sensor</p>
            </div>
        </div>

    </section>


    <!-- bagian chart
		<section id="chart">
			<div class="container">
				<h3>Chart</h3>
                <center>
				<p> grafik dari hasil pemantauan kualitas udara ambien di indistri kimia</p>
                </center>
            </div>
            <div class="chart-image">
                <img src="file:///D:/tugas%20akhir/img/grafik.png" alt="keterangan gambar">
            </div>
            
        </section> -->

    <!-- bagian table -->
    <section id="table">
        <div class="container">
            <h3>Table</h3>
            <center>
                <p> hasil dari pembacaan alat pemantauan kualitas udara ambien di indistri kimia</p>
                <a href="tabel_excel.php" target="_blank" class="btn btn-warning">
                    <i class="fa fa-file-archive"></i>
                    Download Excel
                </a>
            </center>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>PM 2.5 (µg/m3)</th>
                    <th>PM 10 (µg/m3)</th>
                    <th>TSP (µg/m3)</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo date('d-m-Y h:i') ?></td>
                    <td><?php echo "12" ?></td>
                    <td><?php echo "33" ?></td>
                    <td><?php echo "48" ?></td>
                    <td><?php echo "BAIK" ?></td>
                    <h1></h1>
                    </td>
                </tr>
                <tr>
                    <td><?php echo date('d-m-Y h:i') ?></td>
                    <td><?php echo "14" ?></td>
                    <td><?php echo "35" ?></td>
                    <td><?php echo "43" ?></td>
                    <td><?php echo "BAIK" ?></td>
                    <h1></h1>
                    </td>
                </tr>
                <tr>
                    <td><?php echo date('d-m-Y h:i') ?></td>
                    <td><?php echo "11" ?></td>
                    <td><?php echo "34" ?></td>
                    <td><?php echo "45" ?></td>
                    <td><?php echo "BAIK" ?></td>
                    <h1></h1>
                    </td>
                </tr>
            </tbody>
        </table>

        <br>

        <table>
            <thead>
                <tr>
                    <th style="background-color: white;">Rentang</th>
                    <th style="background-color: white;">Kategori</th>
                    <th style="background-color: white;">Penjelasan</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: rgb(0, 255, 0);">
                </tr>
                <tr style="background-color: aqua;">
                    <td>51 - 100</td>
                    <td>Sedang</td>
                    <td>Tingkat mutu udara masih dapat diterima pada kesehatan manusia, hewan, dan tumbuhan.</td>
                </tr>
                <tr style="background-color: yellow;">
                    <td>101 - 200</td>
                    <td>Tidak Sehat</td>
                    <td>Tingkat mutu udara sangat bersifat merugikan pada manusia, hewan, dan tumbuhan.</td>
                </tr>
                <tr style="background-color: red;">
                    <td style="color: white;">201 - 300</td>
                    <td style="color: white;">Sangat Tidak Sehat</td>
                    <td style="color: white;">Tingkat mutu udara yang dapat meningkatkan resiko kesehatan pada sejumlah
                        segmen populasi yang terpapar.</td>
                </tr>
                <tr style="background-color: black;">
                    <td style="color: white;">> 300</td>
                    <td style="color: white;">Berbahaya</td>
                    <td style="color: white;">Tingkat mutu udara yang dapat merugikan kesehatan serius pada populasi dan
                        perlu penanganan cepat.</td>
                </tr>
            </tbody>
        </table>

    </section>

    <!--bagian contact-->
    <section id="contact">
        <div class="container">
            <h3>Contact</h3>
            <div class="col-3">
                <h4>Alamat</h4>
                <p>Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Kota Surabaya, Jawa Timur 60111</p>
            </div>

            <div class="col-3">
                <h4>Email</h4>
                <p>aryabimadwian@student.ppns.ac.id</p>
            </div>

            <div class="col-3">
                <h4>Telp/Hp</h4>
                <p>+62 896-1302-8941</p>
            </div>
        </div>
    </section>

    <!-- bagian copyright -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2023 - Aryabima Dwian Nugroho.</small>
        </div>
    </footer>
</body>

</html>