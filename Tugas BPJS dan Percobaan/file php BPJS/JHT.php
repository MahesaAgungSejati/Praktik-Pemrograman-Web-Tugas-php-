<DOCTYPE html>
    <html>
        <head>
        <style>
    
    .bac1 {
        background-color: rgb(0, 255, 255);
        width: 50%;
        padding: auto;
    }

    .isian {
        background-color: rgb(0, 204, 204);
        width: auto;
        padding: auto;
        border: 10px solid #ccc;
    }
    .nav{
        background-color: rgb(0, 204, 204);
        width: auto;
        padding: auto;
        border: 10px solid #ccc;
    }
    ul{
        list-style-type: none;
    }
    li{
        border: 1px black;
        margin-bottom: 1px;
        text-align: center;
        margin-top: 10px;
        padding-top: 10px;
        display: inline-block;
        width: 300px;
        height: 35px;
        border-radius: 50px;
    }
    a{
        color: black;
        text-decoration: none;
    }
    li:hover{
        background-color: white;
        cursor: pointer;
        transition: 0.5s;
    }
</style>
<body>
    <div class="nav">
        <ul>
        <center><h1 class="bac1" style="color: rgb(0, 0, 0);"> Perhitungan BPJS Ketenagakerjaan</h1><br>
            <li><a href="JHT.php">Menghitung Jaminan Hari Tua</a></li>
            <li><a href="JKK.php">Menghitung Jaminan Kecelakaan Kerja</a></li>
            <li><a href="JKM.php">Menghitung Jaminan Kematian</a></li>
            <li><a href="JP.php">Menghitung Jaminan Pensiun</a></li>
        </ul>
    </div>
</style>
        <title>Perhitungan Iuran BPJS Ketenagakerjaan Program JHT</title>
        </head>
        <body>
            <div class="isian">
        <form method="post">
		<label>Menghitung JHT:</label>
		<input type="number" name="gaji" required>
		<button type="submit">Hitung</button>
	</form>
    </div>

	<?php
	if (isset($_POST['gaji'])) {
		$gaji = $_POST['gaji'];
		$iuran_jht = $gaji * 0.057;
		$iuran_jht_karyawan = $gaji * 0.02;
		$iuran_jht_perusahaan = $gaji * 0.037;

		echo "<br><strong>Hasil perhitungan:</strong><br>";
		echo "Iuran JHT: Rp" . number_format($iuran_jht, 0, ',', '.') . " per bulan<br>";
		echo "Iuran JHT yang dibayar oleh karyawan: Rp" . number_format($iuran_jht_karyawan, 0, ',', '.') . " per bulan<br>";
		echo "Iuran JHT yang dibayar oleh perusahaan: Rp" . number_format($iuran_jht_perusahaan, 0, ',', '.') . " per bulan<br>";
	}
    ?>
        </body>
    </html>