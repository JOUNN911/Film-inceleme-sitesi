<!DOCTYPE html>
<html lang="en">
<head>
    
    
<meta charset="UTF-8">
    
   
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
<title>Kayıt Formu</title>
    <link rel="stylesheet" href="csskodlari/webprojegiris.css">
</head>
<body>
    <div class="form-container">
        <h2>Kayıt Ol</h2>
        <form action="islemler/kayitol.php" method="POST">
            <input type="text" name="kullanici_adi" placeholder="kullanıcı adını yazınız" required>
            <input type="email" name="e-posta" placeholder="e-posta yaz lan" required>
            <input type="password" name="sifre" placeholder="sifre yaz" required>
            <button>Kayıt Ol</button>
        </form>
    </div>

</body>
</html>sc