<?php
require_once('koneksi.php');
$query = "SELECT * FROM tbl_pengguna WHERE username='$_SESSION[username]'";
$exec = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($exec);
?>
<div class="card mb-3">
    <div class="card-body">
        <form action="modul/profile/aksi_profile.php" method="post">
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="username" class ="form-label">username</label>
                    <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>">
                </div>
                <div class="mb-3 col-md-4">
                    <label for="nama_lengkap" class ="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>">
                </div>
                <div class="mb-3 col-md-4">
                    <label for="email" class ="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>">
                </div>
            </div>
            <div class="row">
            <div class="mb-3 col-md-4">
                    <label for="password" class ="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3 col-md-4">
                    <label for="password_baru" class ="form-label">Password Baru</label>
                    <input type="password" class="form-control" name="password_baru">
                </div>
                <div class="mb-3 col-md-4">
                    <label for="password_ulang" class ="form-label">Ulangi Password</label>
                    <input type="password" class="form-control" name="password_ulang">
                </div>
            </div>
            <hr class="text-secondary">
            <div class="d-flex">
                <span class="me-auto text-gray">
                    <?php
                    if(isset($_SESSION['pesan'])){
                        echo $_SESSION['pesan'];
                        unset($_SESSION['pesan']);
                    }
                    ?>
                </span>
                <button type="submit" name="submit" class="btn btn-primary">Perbaharui</button>
            </div>
        </form>
    </div>
</div>