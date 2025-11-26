<?php include "db.php"; ?>

<?php
if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($koneksi, "INSERT INTO users (nama, username, password) 
    VALUES ('$nama','$username','$password')");
    header("Location: index.php");
}
?>

<link rel="stylesheet" href="style.css">
<div class="container">
<h2>Registrasi</h2>

<form method="POST">
    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button name="daftar">Daftar</button>
</form>

</div>
