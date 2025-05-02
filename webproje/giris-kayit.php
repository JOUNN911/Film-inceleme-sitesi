<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap veya Kayıt Ol</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 500px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .tabs {
            display: flex;
            justify-content: space-around;
            margin-bottom: 25px;
        }
        .tabs button {
            padding: 10px;
            border: none;
            background: none;
            font-size: 20px;
            cursor: pointer;
            transition: color 0.3s;
        }
        .tabs button.active {
            color: #28a745;
            font-weight: bold;
        }
        .form {
            display: none;
        }
        .form.active {
            display: block;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button.submit {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button.submit:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="tabs">
            <button class="tab-button active" data-tab="login">Giriş Yap</button>
            <button class="tab-button" data-tab="register">Kayıt Ol</button>
        </div>

        <form id="login" class="form active">
            <input type="email" id="login-email" placeholder="E-posta" required>
            <input type="password" id="login-password" placeholder="Şifre" required>
            <button type="button" class="submit" onclick="handleLogin()">Giriş Yap</button>
        </form>

        <form id="register" class="form">
            <input type="text" id="register-username" placeholder="Kullanıcı Adı" required>
            <input type="email" id="register-email" placeholder="E-posta" required>
            <input type="password" id="register-password" placeholder="Şifre" required>
            <button type="button" class="submit" onclick="handleRegister()">Kayıt Ol</button>
        </form>
    </div>

    <script>
        // Sekme geçişini yöneten kod
        const tabButtons = document.querySelectorAll('.tab-button');
        const forms = document.querySelectorAll('.form');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Aktif sekme değiştir
                tabButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // İlgili formu göster
                const tab = button.getAttribute('data-tab');
                forms.forEach(form => form.classList.remove('active'));
                document.getElementById(tab).classList.add('active');
            });
        });

        // Giriş yapma işlemi
        function handleLogin() {
            const email = document.getElementById('login-email').value;
            const password = document.getElementById('login-password').value;

            if (email && password) {
                alert(`Giriş başarılı: ${email}`);
                // Burada backend'e AJAX ile veri gönderebilirsiniz
            } else {
                alert('Lütfen tüm alanları doldurun!');
            }
        }

        // Kayıt olma işlemi
        function handleRegister() {
            const kullanici_adi = document.getElementById('register-username').value;
            const email = document.getElementById('register-email').value;
            const sifre = document.getElementById('register-password').value;

            if (kullanici_adi && email && sifre) {
                alert(`Kayıt başarılı: ${kullanici_adi}`);
                // Burada backend'e AJAX ile veri gönderebilirsiniz
            } else {
                alert('Lütfen tüm alanları doldurun!');
            }
        }
    </script>
</body>
</html>
