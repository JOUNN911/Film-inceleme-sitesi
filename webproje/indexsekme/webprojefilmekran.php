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
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .bas {
            background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(109, 36, 14, 1) 67%, rgba(128, 0, 9, 1) 100%);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }

        .katagori {
            display: flex;
            justify-content: center;
            background-color: #333; /* Koyu gri menü arka planı */
            padding: 10px 0;
            width: 100%;
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

        .video-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .video-container video {
            width: 800px; /* Sabit genişlik */
            height: 450px; /* Sabit yükseklik */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .video-container h2 {
            margin-top: 20px;
            color: #ffcc00; /* Sarı başlık rengi */
        }

        .soz {
            background-color: #222; /* Koyu arka plan */
            color: #e0e0e0; /* Açık gri metin rengi */
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="bas">
        <h1>Dominant Film</h1>
    </div>

    <div class="katagori">
        <a href="../webprojeornek.php">Haberler</a>
        <a href="webprojekoleksiyon.php">Koleksiyonlar</a>
        <a href="webprojetavsiye.php">Tavsiye Edilenler</a>
    </div>

    <!-- Video Bölümü -->
    <div class="video-container">
        <video controls poster="../images/tenett.jpeg">
            <source src="../videos/tenet.mp4" type="video/mp4">
            Tarayıcınız video etiketini desteklemiyor.
        </video>
        <h2>Tenet</h2>
    </div>

    <div class="soz">
        <blockquote>"İyi insanlar her zaman ölür, kötü insanlarda fakat benim gibi aciz insanlar dünyaya kök salarız."</blockquote>
    </div>
</body>
</html>