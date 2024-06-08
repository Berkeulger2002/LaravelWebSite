<?php
session_start();

// E-posta ve şifreyi al
if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sabit e-posta ve şifre
    $sabit_email = 'admin';
    $sabit_password = 'admin123';

    // E-posta ve şifre doğruysa oturumu başlat
    if ($email === $sabit_email && $password === $sabit_password) {
        // Oturum başlat
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        // Giriş yapıldıktan sonra yönlendirme
        header('Location: index.blade.php');
        exit;
    } else {
        // E-posta veya şifre hatalıysa
        $_SESSION['login_error'] = "E-posta veya şifre hatalı.";
        header('Location: login.php'); // Hatalı girişte yeniden giriş sayfasına yönlendir
        exit;
    }
} else {
    // E-posta veya şifre POST isteği ile gelmemişse
    $_SESSION['login_error'] = "E-posta veya şifre eksik.";
    header('Location: login.php'); // Hatalı girişte yeniden giriş sayfasına yönlendir
    exit;
}
?>
