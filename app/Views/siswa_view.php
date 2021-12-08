<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Siswa List</title>
</head>
<body> 
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="">1915016123 Zulfikar R.M.</a>
        </div>
        <div class="text-right">
            <button class="btn btn-success"><a href="/Siswa/add_new">Add</a></button>
        </div>
    </nav>
    <div class="container pt-5">
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Kursus</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($calon_siswa as $row):?>
            <tr>
                <td><?= $row['nama'];?></td>
                <td><?= $row['alamat'];?></td>
                <td><?= $row['jenis_kelamin'];?></td>
                <td><?= $row['kursus'];?></td>
                <td><?= $row['kelas'];?></td>
                <td>
                    <button class="btn btn-secondary"><a href="/Siswa/edit/<?= $row['id'];?>">Edit</a></button>
                    <button class="btn btn-danger"><a href="/Siswa/delete/<?= $row['id'];?>">Delete</a></button>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
        </div>
</body>
</html>