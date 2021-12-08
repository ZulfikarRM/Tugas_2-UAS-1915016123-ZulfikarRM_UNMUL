<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Siswa</title>
</head>
<body>
    <div class="form-group">
    <form action="/Siswa/save" method="post">
        <a>Nama</a><input type="text" name="nama">
        <a>Alamat</a><input type="text" name="alamat">
        <a>Jenis Kelamin</a><input type="text" name="jenis_kelamin">
        <a>Kursus</a><input type="text" name="kursus">
        <a>Kelas</a><input type="text" name="kelas">
        <button type="submit">Save</button>
    </form>
</div>
</body>
</html>