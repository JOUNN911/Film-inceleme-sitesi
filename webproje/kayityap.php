<?php

session_start();
include '../baglanti/baglanti.php';

$kullanici_ad = $_POST['kullanici_adi'];
$email = $_POST['email'];
$sifre = $_POST['sifre'];

if (!$kullanici_ad || !$email || !$sifre) {
    echo "LÜTFEN BOŞ ALAN BIRAKMAYINIZ";
} elseif ($kullanici_ad && $email && $sifre) {
    // Şifre hashleme
    $hashed_password = password_hash($sifre, PASSWORD_BCRYPT);

    try {
        $ekle = $db->prepare("INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES (?, ?, ?)");
        $ekle->execute([$kullanici_ad, $email, $hashed_password]);

        if ($ekle) { 
            $_SESSION['giris_yapildi'] = true;
            $_SESSION['kullanici_kayitadi'] = $kullanici_adi;
           header("Location: ../kayitoldun/kayitoldun.php");
            exit();
        }
    } catch (PDOException $e) {
        echo "Hata:böyl bir isim ya da e mail girilemez " . $e->getMessage();
    }
}
?>

