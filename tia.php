<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Martatia</title>
    <link rel="stylesheet" href="tiaaa.css">
</head>
<body>
<center><table border="1">
        <tr>
            <td colspan="3">Form Pendataan Jumlah Penduduk</td>
        </tr>
        <tr>
            <td>Nama Kepala Keluarga</td>
            <td>:</td>
            <td><?= $_GET["kplklg"];  ?></td>
        <tr>
            <td>Nama Lengkap </td>
            <td>:</td>
            <td><?= $_GET["nama"];  ?></td>
        </tr>
        <tr>
            <td>Anak ke-</td>
            <td>:</td>
            <td><?= $_GET["anakke"];  ?></td>
        </tr>
        <tr>
            <td>Berapa bersaudara</td>
            <td>:</td>
            <td><?= $_GET["brsdr"];  ?></td>
        </tr>
        <tr>
            <form action="tiaa.php" method="get">
            <td colspan="3"><center><button>Kirim</button></center></td>
            </form>
        </tr>
    </table></center>
</body>
</html>