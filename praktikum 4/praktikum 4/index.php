<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktikum 4</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div class="">
        <?php
        require_once "OrangBiasa.php";
        require_once "OrangInggris.php";
        require_once "mahasiswa.php";


        $della = new OrangBiasa();
        $della->setNama('Della Natasya');
        $della->ucapSalam();

        echo "<br>";

        $rara = new OrangInggris();
        $rara->setNama("Rara Antania");
        $rara->ucapSalam();

        echo "<br>";

        $mahasiswa = new Mahasiswa();
        $mahasiswa->setNama('Sonia Grina');
        $mahasiswa->setNim("701230085");

        $nilaiMahasiswa = new Nilai();
        $nilaiMahasiswa->setTugas(70);
        $nilaiMahasiswa->setUts(67);
        $nilaiMahasiswa->setUas(90);

        $mahasiswa->setNilai($nilaiMahasiswa);

        $mahasiswa->ucapSalam();
        $mahasiswa->tampilkanData();
        
        ?>
</body>
</html>