<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <form action="/Siswa/update" method="post">
        <input type="text" name="nama" value="<?= $calon_siswa->nama;?>">
        <input type="text" name="alamat" value="<?= $calon_siswa->alamat;?>">
        <input type="text" name="jenis_kelamin" value="<?= $calon_siswa->jenis_kelamin;?>">
        <input type="text" name="kursus" value="<?= $calon_siswa->kursus;?>">
        <input type="text" name="kelas" value="<?= $calon_siswa->kelas;?>">
        <input type="hidden" name="id" value="<?= $calon_siswa->id;?>">

        <button type="submit">Update</button>
    </form>
</body>
</html>