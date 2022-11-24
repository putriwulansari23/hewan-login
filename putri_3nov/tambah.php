<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>APLIKASI PEMERIKSAAN HEWAN DI R.S SUMBER WARAS</h1>
    <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for = "nama_pemilik">Nama Pemilik: </label>
                    <input type= "text" name="nama_pemilik"/>
</p>
<p>
    <label for = "jenis_hewan"> Jenis Hewan:</label>
    <select name="jenis_hewan">
        <option value="kucing">kucing</option>
        <option value="anjing">anjing</option>
        <option value="ular">ular</option>
</select>
</p>
<p>
                  <label for = "keluhan">Keluhan: </label>
                  <input type= "text" name="keluhan"/>
</p>
<p>
    <input type="submit" value = "kirim_data" name="kirim_data">
</p>
</body>
</html>