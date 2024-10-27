<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Data Users</h2>
        <a href="create.php" class="btn btn-primary mb-3">Tambah User</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $users) : ?>
                    <tr>
                        <td><?= $users['id'] ?></td>
                        <td><?= $users['name'] ?></td>
                        <td><?= $users['email'] ?></td>
                        <td>
                            <a href="userDetail.php?id=<?= $users['id'] ?>" class="btn btn-info">Detail</a>
                            <a href="userEdit.php?id=<?= $users['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?= $users['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
