<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - HanGuk Taste</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            line-height: 1.6;
            background-color: #fefbd8; /* Warna coklat (tan) */
            min-height: 100vh; /* Memastikan latar belakang menutupi seluruh layar */
            display: flex;
            flex-direction: column;
        }

        .main-title {
            text-align: center;
            margin: 40px 0;
            font-size: 2.5rem;
            color: #8b4513; /* Dark brown */
            animation: fadeIn 1.5s ease-in-out;
        }

        .about-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .about-section img {
            width: 100%;
            border-radius: 10px;
            animation: zoomIn 1.5s ease-in-out;
        }

        .about-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            animation: slideInLeft 1.5s ease-in-out;
        }

        .about-text h2 {
            font-size: 2.5rem;
            color: #8b4513; /* Dark brown */
            margin-bottom: 20px;
        }

        .about-text p {
            font-size: 1rem;
            color: #4f301e; /* Medium brown */
            margin-bottom: 20px;
        }

        .history-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .history-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            animation: slideInRight 1.5s ease-in-out;
        }

        .history-text h2 {
            font-size: 2.5rem;
            color: #8b4513; /* Dark brown */
            margin-bottom: 20px;
        }

        .history-text p {
            font-size: 1rem;
            color: #4f301e; /* Medium brown */
            margin-bottom: 20px;
        }

        .history-section img {
            width: 100%;
            border-radius: 10px;
            animation: zoomIn 1.5s ease-in-out;
        }

        .benefits {
            background: #caa472; /* Warna coklat terang */
            padding: 40px 20px;
            flex-grow: 1; /* Membuat elemen ini memenuhi ruang kosong di halaman */
        }

        .benefits h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #8b4513; /* Dark brown */
            animation: fadeIn 1.5s ease-in-out;
        }

        .benefit-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .benefit-item {
            background: white;
            border: 1px solid #d1b399;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .benefit-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .benefit-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .footer {
            background: #4f301e; /* Darker brown */
            color: white;
            padding: 20px;
            text-align: center;
            animation: fadeInUp 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="main-title">About Us</div>
    <div class="about-section">
        <div class="about-text">
            <h2>Welcome to HanGuk Taste</h2>
            <p>Bisnis kami berfokus pada menghadirkan cita rasa otentik masakan Korea di setiap hidangan.</p>
            <p>Dengan bahan-bahan berkualitas dan resep tradisional, kami berkomitmen untuk membawa cita rasa Korea yang lezat langsung ke meja Anda. Dari Bibimbap yang kaya rasa hingga Kimchi yang pedas dan segar, setiap menu kami dirancang untuk memanjakan selera Anda.</p>
            <p>Nikmati hidangan yang disajikan dengan penuh cinta dan keahlian, menjadikan setiap kunjungan Anda sebagai perjalanan rasa yang tak terlupakan.</p>
        </div>
        <img src="image/koreanfoods.jpg" alt="Korean Foods">
    </div>

    <div class="history-section">
        <img src="image/chef.jpg" alt="Our Chef">
        <div class="history-text">
            <h2>Our History</h2>
            <p>HanGuk Taste berdiri pada tahun 2015 dengan misi memperkenalkan cita rasa autentik masakan Korea kepada masyarakat lokal.</p>
            <p>Terinspirasi oleh budaya kuliner Korea yang kaya dan penuh makna, HanGuk Taste awalnya dimulai sebagai usaha kecil keluarga yang menyajikan hidangan rumahan seperti Kimchi Jjigae, Bibimbap, dan Tteokbokki.</p>
        </div>
    </div>

    <div class="benefits">
        <h2>Food Menu from Appetizer to Dessert</h2>
        <div class="benefit-items">
            <div class="benefit-item">
                <img src="image/mandu.jpg" alt="Appetizer" class="benefit-img">
                <p>Appetizer</p>
            </div>
            <div class="benefit-item">
                <img src="image/kimcijjigae.jpg" alt="Soup" class="benefit-img">
                <p>Soup</p>
            </div>
            <div class="benefit-item">
                <img src="image/bulgogi.jpg" alt="Main Course" class="benefit-img">
                <p>Main Course</p>
            </div>
            <div class="benefit-item">
                <img src="image/dessert.jpg" alt="Dessert" class="benefit-img">
                <p>Dessert</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2023 Korean Restaurant. All rights reserved.</p>
    </div>
</body>
</html>
