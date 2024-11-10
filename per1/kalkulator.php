<?php
$hasil = 0;

if (isset($_POST)) {
    $bilangan1 = $_POST['bilangan1'] ?? 0;
    $bilangan2 = $_POST['bilangan2'] ?? 0;
    $operasi = $_POST['operasi'] ?? NULL;

    if ($operasi == "+") {
        $hasil = $bilangan1 + $bilangan2;
    }

    if ($operasi == "-") {
        $hasil = $bilangan1 - $bilangan2;
    }

    if ($operasi == "*") {
        $hasil = $bilangan1 * $bilangan2;
    }

    if ($operasi == "/") {
        $hasil = $bilangan1 / $bilangan2;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h1>Aplikasi Kalkulator Sederhana</h1>

    <form action="" method="post">
        <table border="1">
            <tr>
                <td><label for="">Masukkan nilai pertama :</label></td>
                <td><input type="number" name="bilangan1"></td>
            </tr>
            <tr>
                <td><label for="">Masukkan nilai kedua :</label></td>
                <td><input type="number" name="bilangan2"></td>
            </tr>
            <tr>
                <td><label for="">Pilih operasi :</label></td>
                <td>
                    <select name="operasi" id="">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">X</option>
                        <option value="/">/</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Hasil perhitungan: <?php echo $hasil; ?></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
