<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
     <div class="fs-45">
        <?php
        include "visibility.php";

        $visibility = new visibility();
        $visibility->tampilkanData();

        echo "<br>";

        echo "Akses di luar kelas <br>";
        echo "public :" . $visibility->public . '<br>';
        //echo "private :" $visibility->private . '<br>';
        //echo "protected :" $visibility->protected . '<br>';
        echo "<br> <br>";
        echo "<h2> Konsep Pewarisan </h2>";

        include "Mahasiswa.php";

        $mahasiswa = new Mahasiswa("Della Natasya");
        $mahasiswa->ucapSalam();

        $mahasiswaInggris = new MahasiswaAsing("Jihan");
        $mahasiswaInggris->ucapSalam()
        ?>
        </div>
</body>
</html>