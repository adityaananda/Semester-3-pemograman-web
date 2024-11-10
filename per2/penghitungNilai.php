<?php

$NilaiRataRata = ""; 
$Status = "";

if(isset($_POST['submit'])){

    $Nilai1 = $_POST['Nilai1'];
    $Nilai2 = $_POST['Nilai2'];
    $Nilai3 = $_POST['Nilai3'];

    
    $NilaiAkhir = ($Nilai1 + $Nilai2 + $Nilai3) / 3;
    $NilaiRataRata = number_format($NilaiAkhir, 2);
    if($NilaiAkhir >= 60){
        $Status = "Lulus";
    }else{
        $Status = "Tidak Lulus";
    }

      

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>
        Menghitung  Nilai Akhir 
    </title>

</head>
<style>
    body{
        font-family: 'Bebas Neue', sans-serif;
    }
</style>
<body>

    <h1>Aplikasi Penilaian Mahasiswa</h1>
    <form action="" method="POST">
        <table border="1" cellspacing="0" cellpadding="7">
            <tr>
                <td><label for="Nilai1">Masukkan Nilai Mata Kuliah 1   </label></td>
                <td><input type="number" name="Nilai1" id="Nilai1" required></td>
            </tr>
            <tr>
                <td><label for="Nilai2">Masukkan Nilai Mata Kuliah 2   </label></td>
                <td><input type="number" name="Nilai2" id="Nilai2" required></td>
            </tr>
            <tr>
                <td><label for="Nilai3">Masukkan Nilai Mata Kuliah 3   </label></td>
                <td><input type="number" name="Nilai3" id="Nilai3" required></td>
            </tr>
            <td colspan="2"><button type="submit" name="submit">Submit</button></td>
            <tr>
                <td colspan="2"><p>Nilai Rata-rata : <?php echo isset($NilaiRataRata) ? $NilaiRataRata : ''; ?></p></td>
            </tr>
            <tr>
                <td colspan="2"><p>Status Kelulusan : <?php echo isset($Status) ? $Status : ''; ?></p></td>
            </tr>
        </table>
    </form>

</body>
</html>
