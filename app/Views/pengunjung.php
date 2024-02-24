<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Data Pengunjung</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal Berkunjung</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. telepon</th>
                    <th scope="col">Keperluan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_data_pengunjung as $pengunjung) : ?> <tr>
                        <td><?= $pengunjung->tgl_berkunjung ?></td>
                        <td><?= $pengunjung->nama_pengunjung ?></td>
                        <td><?= $pengunjung->tgl_berkunjung ?></td>
                        <td><?= $pengunjung->alamat ?></td>
                        <td><?= $pengunjung->no_telepon ?></td>
                        <td><?= $pengunjung->keperluan ?></td>
                        <td><a href="<?= base_url('edit_data_pengunjung') . '/' . $pengunjung->id ?>" class="btn btn-info btn-sm">Edit</a> <a href="<?= base_url('delete_data_pengunjung') . '/' . $pengunjung->id ?>" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>
        <br>
        <a href="<?= base_url('add_data_pengunjung') ?>" class="btn btn-primary">+ Tambah Data Pengunjung</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>