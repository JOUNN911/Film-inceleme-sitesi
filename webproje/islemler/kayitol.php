<?php

session_start();
include '../bağlanti/bağlanti.php';

$kullanici_ad = $_POST['kullanici_adi'];
$email = $_POST['e-posta'];
$sifre = $_POST['sifre'];

if (!$kullanici_ad || !$email || !$sifre) {
    echo "LÜTFEN BOŞ ALAN BIRAKMAYINIZ";
} elseif ($kullanici_ad && $email && $sifre) {
    // Şifre hashleme
    $hashed_password = password_hash($sifre, PASSWORD_BCRYPT);

    try {
        $ekle = $db->prepare("INSERT INTO kullanici (kullaniciad, email, sifre) VALUES (?, ?, ?)");
        $ekle->execute([$kullanici_ad, $email, $hashed_password]);

        if ($ekle) { 
            $_SESSION['giris_yapildi'] = true;
            $_SESSION['kullanici_kayitadi'] = $kullanici_ad;
           header("Location: ../webprojeornek.php");
           
        }
    } catch (PDOException $e) {
        echo "Hata:böyl bir isim ya da e mail girilemez " . $e->getMessage();
    }
}
?>