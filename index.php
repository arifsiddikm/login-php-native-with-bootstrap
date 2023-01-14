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

?>
<!-- Panggil Header, biar lebih simple source codenya -->
<?php include('header.php'); ?>
<div class="container">
<div class="jumbotron shadow">
  <h1 class="display-4">Hallo, </h1>
  <p class="lead par">
    Kenalin nama saya Arif. <br><br>
    Kali ini saya membuat contoh halaman login sederhana yang backend nya sendiri masih menggunakan PHP Native, dan framework desain menggunakan Bootstrap v.4. <br>
    Dalam website ini terdapat 4 halaman antara lain: <br>
    <i class="fa fa-angle-right"></i> index.php <br>
    <i class="fa fa-angle-right"></i> login.php <br>
    <i class="fa fa-angle-right"></i> home.php <br>
    <i class="fa fa-angle-right"></i> logout.php <br>
    <br>
    Saya juga memberikan komentar pada setiap baris kode yang bisa anda pelajari agar lebih jelas, serta saya pun memberikan penjelasan-penjelasan tentang teknologi yang saya gunakan dalam pembuatan website ini seperti bahasa pemrogramannya yaitu PHP, dan framework desainnya yaitu Bootstrap, mau tau apa penjelasannya? silahkan login terlebih dahulu, data akun sudah saya sediakan pada halaman login.
  </p>
  <hr class="my-4">
  <p class="lead par">Oke, langsung kita coba fitur loginnya yuk</p>
    <a class="btn btn-primary btn-lg" href="login.php" role="button">Login Sekarang</a>
</div>
</div>


<!-- Panggil file footer -->
<?php include('footer.php') ?>