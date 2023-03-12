<DOCTYPE html>
    <html>
        <head>
        <style>
    
    .bac1 {
        background-color: rgb(102, 102, 255);
        width: 50%;
        padding: auto;
    }
    .isian{
        background-color: rgb(102, 178, 255);
        width: auto;
        padding: auto;
        border: 10px solid #ccc;
    }
    .nav{
        background-color: rgb(102, 178, 255);
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
		<label>Upah Pekerja:</label>
		<input type="number" name="upah" required>
		<br>
		<label>Tingkat Risiko:</label>
		<select name="risiko" required>
			<option value="">Pilih Tingkat Risiko</option>
			<option value="0.0024">Sangat Rendah (0,24%)</option>
			<option value="0.0054">Rendah (0,54%)</option>
			<option value="0.0089">Sedang (0,89%)</option>
			<option value="0.0127">Tinggi (1,27%)</op.tion>
			<option value="0.0174">Sangat Tinggi (1,74%)</option>
		</select>
		<br>
		<button type="submit">Hitung</button>
	</form>
    </div>

    <?php
	if (isset($_POST['upah']) && isset($_POST['risiko'])) {
		$upah = $_POST['upah'];
		$persen = $_POST['risiko'];
		$iuran_jkk = $upah * $persen;

		echo "<br><strong>Hasil perhitungan:</strong><br>";
		echo "Iuran JKK: Rp" . number_format($iuran_jkk, 0, ',', '.') . " per bulan<br>";
	}
	?>
        </body>
    </html>