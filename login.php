<?php $username = "user" ?>

<?php $password = "admin" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Biodata Siswa</title> 
</head>
<body>
    <h1>Berikut Data Anda:</h1>
    Username: <?php echo $username  ?>
    <p>Password: <?php echo $password ?></p>
  <button type="button" onclick="location.href='https://uhuyy--adityaesya.repl.co/'">Click button to Logout</button>
  <center><h2>Data Siswa XI - RPL</h2></center>
  <table border="1" cellspacing="0" cellpadding="5" align="center" width="700">
    <tr align="center" bgcolor="grey">
        <th width="200">Nama</th>
        <th width="200">Kelas</th>
        <th width="200">Nisn</th>
        <th width="200">Tgl Lahir</th>
        <th width="200">Umur</th>
    </tr>
    <tr>
        <td>Ifat</td>
        <td>XI-RPL</td>
        <td>1515161718</td>
        <td>20 Mei 2006</td>
        <td>17</td>
    </tr>
    <tr>
        <td>Rido</td>
        <td>XI-RPL</td>
        <td>1516171718</td>
        <td>10 Januari 2006</td>
        <td>17</td>
    </tr>
    <tr>
        <td>Jakek</td>
        <td>XI-RPL</td>
        <td>1516171818</td>
        <td>17 Agustus 1944</td>
        <td>69</td>
    </tr>
    <tr>
        <td>Steven</td>
        <td>XI-RPL</td>
        <td>1516161718</td>
        <td>11 Januari 2019</td>
        <td>4</td>
    </tr>
    <tr>
        <td>Reno</td>
        <td>XI-RPL</td>
        <td>1215161718</td>
        <td>6 September 1969</td>
        <td>50</td>
    </tr>
  </table>
</body>
</html>