<h1>Tambah User</h1>
<form method="POST">
    <label>ID :</label>
    <input type="id" name="id" required><br>
    <label>Nama :</label>
    <input type="text" name="name" required><br>
    <label>Email :</label>
    <input type="email" name="email" required><br>
    <a href="index.php?id=<?= $user['id'] ?>" class="btn btn-success">Tambah</a>
</form>
