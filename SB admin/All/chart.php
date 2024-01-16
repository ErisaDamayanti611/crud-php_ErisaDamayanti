

<?php

// Ambil data program studi
$koneksi = new mysqli("localhost", "root", "", "academic");
$programStudiData = [];
$queryProgramStudi = mysqli_query($koneksi, "SELECT Prodi, COUNT(*) as jumlah FROM mhsswa GROUP BY Prodi");
while ($row = mysqli_fetch_assoc($queryProgramStudi)) {
    $programStudiData['labels'][] = $row['Prodi'];
    $programStudiData['data'][] = $row['jumlah'];
}

// Ambil data agama
$agamaData = [];
$queryAgama = mysqli_query($koneksi, "SELECT agama, COUNT(*) as jumlah FROM mhsswa GROUP BY agama");
while ($row = mysqli_fetch_assoc($queryAgama)) {
    $agamaData['labels'][] = $row['agama'];
    $agamaData['data'][] = $row['jumlah'];
}
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", { packages: ['corechart'] });
    google.charts.setOnLoadCallback(drawCharts);

    function drawCharts() {
        // Inisialisasi grafik program studi
        var programStudiDataArray = google.visualization.arrayToDataTable([
            ["Element", "Density", { role: "style" }],
            <?php
            $colors = ["#CC0000", "#FFCC00", "#00CC00", "#3366FF"]; // Tambahkan warna sesuai dengan jumlah program studi
            foreach ($programStudiData['labels'] as $index => $label) {
                echo '["' . $label . '", ' . $programStudiData['data'][$index] . ', "' . $colors[$index % count($colors)] . '"],';
            }
            ?>
        ]);

        var programStudiOptions = {
            title: "GRAFIK DATA PROGRAM STUDI MAHASISWA",
            width: 500,
            height: 400,
            bar: { groupWidth: "95%" },
            legend: { position: "none" },
            hAxis: {
                slantedText: true,    // Menyudutkan teks
                slantedTextAngle: 45  // Sudut miring 45 derajat
            }
        };

        var programStudiChart = new google.visualization.ColumnChart(document.getElementById("programStudiChart"));
        programStudiChart.draw(programStudiDataArray, programStudiOptions);

        // Inisialisasi grafik agama
        var agamaDataArray = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            <?php
            foreach ($agamaData['labels'] as $index => $label) {
                echo '["' . $label . '", ' . $agamaData['data'][$index] . '],';
            }
            ?>
        ]);

        var agamaOptions = {
            title: 'GRAFIK DATA AGAMA MAHASISWA',
            is3D: true,
            width: 500, // Ubah ukuran lebar sesuai kebutuhan
            height: 500 // Ubah ukuran tinggi sesuai kebutuhan
        };

        var agamaChart = new google.visualization.PieChart(document.getElementById('agamaChart'));
        agamaChart.draw(agamaDataArray, agamaOptions);
    }
</script>
  
<div id="content" class="theme-default">        
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6"> <!-- Menggunakan col-md-6 untuk membuat ukuran yang sama -->
          <div class="chart-container"> 
            <div id="programStudiChart" style="width: 100%; height: 300px; border: 1px solid #ddd;"></div>
            </div> 
        </div>             
        <div class="col-md-6"> <!-- Menggunakan col-md-6 untuk membuat ukuran yang sama -->
            <div class="chart-container"> 
                <div id="agamaChart" style="width: 100%; height: 300px; border: 1px solid #ddd;"></div>
            </div>
        </div>
    </div>
</div>

<br><br>
<br><br>
