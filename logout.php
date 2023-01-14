<?php  
session_start();
session_destroy();
echo "<script>
        alert('Logout berhasil, selamat tinggal ^_^');
        document.location.href='login.php';
        </script>";
?>