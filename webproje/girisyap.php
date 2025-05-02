<?php


session_start();
include '../baglanti/baglanti.php'; // Veritabanı bağlantısı yapılır.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];

    // Kullanıcı adı ve hash kontrolü
    $sorgu = $db->prepare("SELECT parola FROM kullanicilar WHERE kullanici_adi = :kullanici_adi");
    $sorgu->bindParam(':kullanici_adi', $kullanici_adi);
    $sorgu->execute();
    $kullanici = $sorgu->fetch(PDO::FETCH_ASSOC);

    if ($kullanici) {
        if (password_verify($sifre, $kullanici['parola'])) {
            $_SESSION['giris_yapildi'] = true;
            $_SESSION['kullanici_adi'] = $kullanici_adi;
            header("Location: ../hosgeldin/hosgeldin.php");
            exit;
        } else {
            echo "Şifre yanlış!";
        }
    } else {
        echo "Kullanıcı adı bulunamadı!";
    }
}
?>
