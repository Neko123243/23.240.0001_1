<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($user) ? 'Edit' : 'Tambah' ?> User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2><?= isset($user) ? 'Edit' : 'Tambah' ?> User</h2>
        <form action="<?= isset($user) ? '/Belajar-MVC/update.php' : '/Belajar-MVC/store.php' ?>" method="POST">
            <?php if (isset($user)) : ?>
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <?php endif; ?>
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?? '' ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?? '' ?>" required>
            </div>
            <button type="submit" class="btn btn-primary"><?= isset($user) ? 'Update' : 'Simpan' ?></button>
        </form>
    </div>
</body>
</html>
