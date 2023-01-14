<?php
// mulai sesi, wajib untuk sistem login
session_start();
// Validasi sesi login
// Jika tidak ada sesi login, maka redirect ke halaman login, login terlebih dahulu
if(!isset($_SESSION['login'])) {
    echo "<script>
            alert('Oops, anda belum login, harap login terlebih dahulu untuk mengunjungi halaman ini ^_^');
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
    Kali ini saya membuat contoh halaman login sederhana yang backend nya sendiri masih menggunakan PHP Native, dan framework desain menggunakan Bootstrap v.4.
    Oke, disini saya akan memberikan penjelasannya. Apa yang mau saya jelaskan? <br>
    <i class="fa fa-angle-right"></i> Visual Studio Code <br>
    <i class="fa fa-angle-right"></i> XAMPP <br>
    <i class="fa fa-angle-right"></i> HTML <br>
    <i class="fa fa-angle-right"></i> CSS <br>
    <i class="fa fa-angle-right"></i> PHP <br>
    <i class="fa fa-angle-right"></i> MySQL <br>
    <i class="fa fa-angle-right"></i> Bootstrap <br>
    </p>
    <br>
    <h2>1. Visual Studio Code</h2>
    <p>
        Visual Studio Code adalah IDE / Text Editor yang dikembangkan oleh Microsoft untuk Windows,Linux dan macOS. Ini termasuk dukungan untuk debugging, kontrol Git yang tertanam dan GitHub, penyorotan sintaksis, penyelesaian kode cerdas, snippet, dan refactoring kode. Ini sangat dapat disesuaikan, memungkinkan pengguna untuk mengubah tema, pintasan keyboard, preferensi, dan menginstal ekstensi yang menambah fungsionalitas tambahan. Aplikasi ini adalah text editor yang biasa saya gunakan untuk ngoding hehe.
    </p>
    <h2>2. XAMPP</h2>
    <p>
        XAMPP adalah perangkat lunak bebas, yang mendukung banyak sistem operasi, merupakan kompilasi dari beberapa program.
        <br><br>
        Fungsinya adalah sebagai server yang berdiri sendiri (localhost), yang terdiri atas program Apache HTTP Server, MySQL database, dan penerjemah bahasa yang ditulis dengan bahasa pemrograman PHP dan Perl. Nama XAMPP merupakan singkatan dari X (empat sistem operasi apapun), Apache, MySQL, PHP dan Perl. Program ini tersedia dalam GNU General Public License dan bebas, merupakan web server yang mudah digunakan yang dapat melayani tampilan halaman web yang dinamis. Untuk mendapatkanya dapat mendownload langsung dari web resminya.
    </p>
    <h2>3. HTML</h2>
    <p>
        HTML ( Hypertext Markup Language ) adalah sebuah bahasa markah yang digunakan untuk membuat sebuah halaman web, menampilkan berbagai informasi di dalam sebuah penjelajah web Internet dan pemformatan hiperteks sederhana yang ditulis dalam berkas format ASCII agar dapat menghasilkan tampilan wujud yang terintegerasi.
    </p>
    <h2>4. CSS</h2>
    <p>
        CSS ( Cascading Style Sheet ) merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemograman.
        <br>
        Sama halnya styles dalam aplikasi pengolahan kata seperti Microsoft Word yang dapat mengatur beberapa style, misalnya heading, subbab, bodytext, footer, images, dan style lainnya untuk dapat digunakan bersama-sama dalam beberapa berkas (file).
        <br>
        CSS dapat mengendalikan ukuran gambar, warna bagian tubuh pada teks, warna tabel, ukuran border, warna border, warna hyperlink, warna mouse over, spasi antar paragraf, spasi antar teks, margin kiri, kanan, atas, bawah, dan parameter lainnya.
    </p>
    <h2>5. PHP</h2>
    <p>
        PHP ( PHP Hypertext Presprocessor ) adalah bahasa skrip yang dapat ditanamkan atau HTML ( disisipkan ke dala . PHP banyak dipakai untuk memprogram situs web dinamis. PHP dapat digunakan untuk membangun sebuah CMS. PHP ini istilahnya mh bahasa sistem, bahasa yang berjalan dibalik layar pada server yang tidak terlihat oleh user bagaimana prosesnya, atau biasa disebut logika dalam sistem website.
    </p>
    <h2>6. Bootstrap</h2>
    <p>
        Bootstrap adalah open-source framework front-end yang bebas untuk merancang situs web dan aplikasi web. Framework ini berisi template desain berbasis HTML dan CSS untuk tipografi, formulir, tombol, navigasi dan komponen antarmuka lainnya, serta juga ekstensi opsional JavaScript. 
    </p>
    <br>
    <p class="lead par">
        Oke, itu saja yang bisa saya jelaskan, jika ada yang kurang berkenan mohon dilupakan hehe, jika source code ini bermanfaat, silahkan share ke teman anda.
    </p>
  <hr class="my-4">
  <p class="lead par">Mau keluar?</p>
    <a class="btn btn-primary btn-lg" href="logout.php" role="button">Logout</a>
</div>
</div>


<!-- Panggil file footer -->
<?php include('footer.php') ?>