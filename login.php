<?php
// mulai sesi, wajib untuk sistem login
session_start();
// Validasi sesi login
// Jika ada sesi login, maka redirect ke halaman home
if(isset($_SESSION['login'])) {
echo "<script>
    alert('Oops, anda sedang login, harap keluar terlebih dahulu untuk mengunjungi halaman ini ^_^');
    document.location.href='home.php';
    </script>";
// Matikan semua code dibawah agar tidak berfungsi
die();
}
// Proses Login
// Jika tombol login diklik
if(isset($_POST['btn_login'])) {
    // ambil value username&password, dan masukan dalam variable
    $username = $_POST['username'];
    $password = $_POST['password'];
    /* 
     Validasi username dan password
     Jika username bukan user, dan password bukan 123, makan tidak bisa login
     Proses ini diterapkan dengan metode statis, yaitu menggunakan data dari script, bukan dari database, jadi tidak bisa menggunakan data akun selain yang ditulis di script.
    */
    if($username!=='user' || $password!=='123') {
        // Beri alert menggunakan javascript, bisa dengan yang lain juga
        // Beri alert serta redirect halaman 
        echo "<script>
                alert('Login Gagal, Username & Password salah :(');
                document.location.href='login.php';
              </script>";
        return false;
    }
    else {
        // Jika iya, maka berhasil login, beri sesi login, biar bisa merubah tampilan website
        $_SESSION['login']=true;
        // Beri alert serta redirect halaman 
        echo "<script>
                alert('Login Berhasil ^_^');
                document.location.href='home.php';
              </script>";    
    }
}
?>
<!-- Panggil Header, biar lebih simple source codenya -->
<?php include('header.php'); ?>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-4 shadow p-4" style='border-radius:15px;background:white;'>
<h1 class="text-center" style="">
    Login
</h1>
<hr>
    <form method="post">
    <center>
        <i class="fa fa-user-circle fa-8x text-primary"></i>
    </center>
    <br>
    <label class="animated delay-05ms rotateInDownLeft" for="username">Username :</label>
    <div class="input-group mb-2 animated delay-05ms bounceInLeft">
    <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user"></i></div>
    </div>
    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan username..." autofocus="" autocomplete="off">
    </div>
    <label class="animated delay-05ms rotateInDownLeft" for="password">Password :</label>
    <div class="input-group mb-2 animated delay-05ms bounceInRight">
    <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-lock"></i></div>
    </div>
    <input type="password" class="form-control" name="password" id="password" placeholder="Masukan password...">
    <div class="input-group-prepend">
    <div class="input-group-text" id="showpass">
        <a href="javascript:void(0);" onclick="showpass();"><i class="fa fa-eye-slash text-dark"></i></a>
        </div>
        <div class="input-group-text" id="hidepass" style="display: none;">
        <a href="javascript:void(0);" onclick="hidepass();"><i class="fa fa-eye text-dark"></i></a>
        </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block mt-3" style="border-radius: 25px;" name="btn_login">
        Login
    </button>
    <br>
    <p>
        Harap gunakan data ini: <br>
        Username : user <br>
        Password : 123 <br>   
    </p>
    <hr>
    </form>
    <p class="text-center">
        Tidak punya akun? <a href="#">Daftar</a>
    </p>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br>
<!-- Panggil file footer -->
<?php include('footer.php') ?>