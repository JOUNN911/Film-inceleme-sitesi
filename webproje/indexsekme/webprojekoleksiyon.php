<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dominant Koleksiyon</title>
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
            text-align: center;
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

        .izgara a {
            text-decoration: none;
            color: inherit;
        }

        .izgara img {
            width: 200px;
            height: 300px;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .izgara img:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
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
        <h1>Dominant Koleksiyon</h1>
    </div>

    <div class="katagori">
        <a href="../webprojeornek.php">Haberler</a>
        <a href="webprojekoleksiyon.php">Koleksiyonlar</a>
        <a href="webprojetavsiye.php">Tavsiye Edilenler</a>
    </div>

    <div class="dizifilm">
        <div class="izgara">
            <a href="webprojefilmekran.php">
                <img src="../images/tennet.jpg" alt="Tenet">
            </a>
            <a href="webprojefilmekran.php">
                <img src="../images/tennet.jpg" alt="Film 2">
            </a>
            <a href="webprojefilmekran.php">
                <img src="../images/tennet.jpg" alt="Film 3">
            </a>
            <a href="webprojefilmekran.php">
                <img src="../images/tennet.jpg" alt="Film 4">
            </a>
            <a href="webprojefilmekran.php">
                <img src="../images/tennet.jpg" alt="Film 5">
            </a>
            <a href="webprojefilmekran.php">
                <img src="https://via.placeholder.com/200x300" alt="Film 6">
            </a>
            <a href="webprojefilmekran.php">
                <img src="https://via.placeholder.com/200x300" alt="Film 7">
            </a>
            <a href="webprojefilmekran.php">
                <img src="https://via.placeholder.com/200x300" alt="Film 8">
            </a>
            <a href="webprojefilmekran.php">
                <img src="https://via.placeholder.com/200x300" alt="Film 9">
            </a>
            <a href="webprojefilmekran.php">
                <img src="https://via.placeholder.com/200x300" alt="Film 10">
            </a>
            <a href="webprojefilmekran.php">
                <img src="https://via.placeholder.com/200x300" alt="Film 11">
            </a>
            <a href="webprojefilmekran.php">
                <img src="https://via.placeholder.com/200x300" alt="Film 12">
            </a>
        </div>
    </div>

    <div class="soz">
        <blockquote>"İyi insanlar her zaman ölür, kötü insanlarda fakat benim gibi aciz insanlar dünyaya kök salarız."</blockquote>
    </div>
</body>
</html>