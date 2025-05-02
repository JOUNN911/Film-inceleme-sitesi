<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dominant Film</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #1a1a1a; /* Koyu arka plan */
            color: #e0e0e0; /* Açık gri metin rengi */
        }

        .baslik {
            background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(109, 36, 14, 1) 67%, rgba(128, 0, 9, 1) 100%);
            color: #fff;
            padding: 20px 0;
            text-align: right; /* Başlığı sağa hizaladık */
            position: relative; /* Pozisyonu belirlemek için */
        }

        .baslik h1 {
            margin: 0;
            padding-right: 20px; /* Sağdan boşluk bıraktık */
            font-size: 36px; /* Font boyutunu büyüttük */
            font-weight: bold; /* Kalın yazı */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Gölge efekti */
            display: inline-block; /* Başlığı inline-block yaparak sağa hizaladık */
        }

        .katagori {
            display: flex;
            justify-content: center;
            background-color: #333; /* Koyu gri menü arka planı */
            padding: 10px 0;
        }

        .katagori a {
            color: #e0e0e0; /* Açık gri metin rengi */
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }

        .katagori a:hover {
            color: #ffcc00; /* Fare üzerine gelince sarı renk */
            text-shadow: 0px 0px 5px #ffcc00; /* Hafif parlaklık efekti */
        }

        .dizifilm {
            padding: 20px;
        }

        .izgara {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .izgara img {
            width: 200px;
            height: 250px;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); /* Daha belirgin gölge */
            transition: transform 0.3s, box-shadow 0.3s; /* Geçiş efekti */
        }

        .izgara img:hover {
            transform: scale(1.05); /* Büyütme efekti */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Gölgeyi artır */
        }

        .soz {
            background-color: #222; /* Koyu arka plan */
            color: #e0e0e0; /* Açık gri metin rengi */
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="baslik">
        <h1>Dominant Film</h1>
    </div>

    <div class="katagori">
        <a href="webprojeornek.php">Haberler</a>
        <a href="indexsekme/webprojekoleksiyon.php">Koleksiyonlar</a>
        <a href="indexsekme/webprojetavsiye.php">Tavsiye Edilenler</a>
        <a href="webprojegiris.php">çıkış yap</a>
    </div>

    <div class="dizifilm">
        <div class="izgara">
            <img src="film1.jpg" alt="Film 1">
            <img src="film2.jpg" alt="Film 2">
            <img src="film3.jpg" alt="Film 3">
            <img src="film4.jpg" alt="Film 4">
            <img src="film5.jpg" alt="Film 5">
            <img src="film6.jpg" alt="Film 6">
            <img src="film7.jpg" alt="Film 7">
            <img src="film8.jpg" alt="Film 8">
        </div>
    </div>

    <div class="soz">
        <p>© 2023 Dominant Film. Tüm hakları saklıdır.</p>
    </div>
</body>
</html>