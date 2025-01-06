<?php
// home.php
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to HanGuk taste</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }

        /* Header Styles */
        .header {
            position: fixed;
            width: 100%;
            padding: 20px;
            background: transparent;
            z-index: 1000;
        }

        .nav-menu {
            display: flex;
            justify-content: flex-end;
            list-style: none;
        }

        .nav-menu li {
            margin-left: 30px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                        url('image/koreanfoods.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-bowl {
            max-width: 600px;
        }

        .hero-text {
            margin-top: 20px;
        }

        /* Main Content */
        .main-content {
            padding: 50px 0;
        }

        .section {
            padding: 50px;
            margin: 0 auto;
            max-width: 1200px;
        }

        /* Our Store Section */
        .our-store {
            background-color: #f8b133;
            color: white;
            padding: 50px 0;
            text-align: center;
        }

        /* Our Story Section */
        .our-story {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            padding: 50px;
        }

        .story-card {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            font-size: 14px; /* Perkecil ukuran teks */
        }

        .story-card img {
            width: 80%; /* Perkecil ukuran gambar */
            margin-bottom: 10px;
        }

        /* Menu Section */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .menu-item {
            position: relative;
            overflow: hidden;
        }

        .menu-item img {
            width: 100%;
            height: auto;
        }

        /* Footer */
        .footer {
            background-color: #333;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .customer-center {
            background-color: #552222;
            color: white;
            padding: 20px;
            text-align: center;
        }
        /* Hover Animation for Navigation Links */
.nav-menu a:hover {
    color: #f8b133;
    transform: translateY(-5px); /* Bergerak sedikit ke atas */
    transition: transform 0.3s ease, color 0.3s ease;
}

/* Hover Animation for Hero Bowl Image */
.hero-bowl:hover {
    transform: scale(1.1) rotate(-5deg); /* Membesar dan berputar */
    transition: transform 0.4s ease;
}

/* Hover Animation for Menu Items */
.menu-item:hover img {
    transform: scale(1.05) translateY(-10px); /* Membesar dan naik sedikit */
    transition: transform 0.3s ease;
}

.menu-item:hover h3 {
    color: #f8b133;
    transition: color 0.3s ease;
}

/* Hover Animation for Buttons */
button:hover {
    background-color: #ffa500;
    color: white;
    transform: scale(1.1); /* Membesar */
    transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
}

/* Hover Animation for Story Cards */
.story-card:hover {
    transform: translateY(-10px) scale(1.05); /* Bergerak naik dan membesar */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

    </style>
</head>
<body>

    <section class="hero">
        <div class="hero-content">
            <img src="image/koreanfoods.jpg" alt="Korean Bowl" class="hero-bowl">
            <div class="hero-text">
                <h1>From Kimchi to Bulgogi</h1>
                <p>Explore the Richness of Korean Dishes</p>
                <p>서울의 거리로 데려가는 별미</p>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="section">
            <h2>What do you want to Eat ?</h2>
            <!-- Add your content here -->
        </div>
    </section>

    <section class="our-store">
        <div class="section">
            <h2>OUR STORE</h2>
            <p>HanGuk Taste</p>
            <button>매장찾기</button>
        </div>
    </section>

    <section class="our-story">
    <div class="story-card">
        <img src="image/kimchijjigae2.jpg" alt="Restaurant">
        <h3>Kimchi Jjigae (김치찌개)</h3>
        <p>salah satu masakan sup tradisional Korea yang berbahan dasar kimchi. Hidangan ini dikenal dengan rasa pedas, asam, dan gurih yang mendalam, menjadikannya comfort food populer di Korea, terutama saat cuaca dingin.</p>
    </div>
    <div class="story-card">
        <img src="image/makkgeolli2.jpg" alt="Event">
        <h3>MAKKGEOLLI (막갈리)</h3>
        <p>minuman tradisional Korea yang terbuat dari fermentasi beras atau gandum. Ini adalah jenis rice wine yang memiliki rasa manis, sedikit asam, dan beraroma, dengan kandungan alkohol yang relatif rendah, biasanya sekitar 6-8%.</p>
    </div>
    <div class="story-card">
        <img src="image/mandu.jpg" alt="News">
        <h3>Mandu (맨두)</h3>
        <p>pangsit khas Korea yang terbuat dari adonan tepung yang diisi dengan berbagai bahan, seperti daging, sayuran, atau tofu. Mandu memiliki variasi bentuk, metode memasak, dan isi, sehingga menjadi hidangan yang fleksibel dan populer di berbagai kesempatan.</p>
    </div>
</section>


    <section class="menu-section">
        <div class="section">
            <h2>The Menu</h2>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="image/bimbimbab.jpg" alt="Menu 1">
                    <h3>Bimbimbab</h3>
                    <h3>비빔밥</h3>
                </div>
                <div class="menu-item">
                    <img src="image/topoki.jpg" alt="Menu 2">
                    <h3>tteokbokki</h3>
                    <h3>떡볶이</h3>
                </div>
                <div class="menu-item">
                    <img src="image/kimbab.jpg" alt="Menu 3">
                    <h3>Kimbab</h3>
                    <h3>김밥</h3>
                </div>
                <div class="menu-item">
                    <img src="image/enoki.jpg" alt="Menu 4">
                    <h3>Sundubu Jjigae</h3>
                    <h3>닱갈비</h3>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="customer-center">
            <h3>Customer Center</h3>
            <p>1544-6062</p>
            <!-- Add additional contact information -->
        </div>
        <p>&copy; <?php echo date('Y'); ?> Shining Korean Restaurant. All rights reserved.</p>
    </footer>
</body>
</html>
