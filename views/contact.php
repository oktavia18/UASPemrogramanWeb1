<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Restaurant</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #fefbd8;
            color: #444;
        }

        .hero {
            background-image: linear-gradient(rgba(139,69,19,0.8), rgba(255,140,0,0.8)), url('/api/placeholder/1200/400');
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            background-size: cover;
            background-position: center;
            animation: fadeIn 1.5s ease-in-out;
        }

        .hero h1 {
            font-size: 3rem;
            transition: transform 0.3s ease;
        }

        .hero h1:hover {
            transform: scale(1.05);
        }

        .contact-section {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            animation: fadeIn 1.5s ease-in-out;
        }

        .contact-info {
            padding: 20px;
            background-color: #fff5e6;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: slideInLeft 1s ease-in-out;
        }

        .contact-info h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #b35900;
        }

        .contact-details {
            margin-top: 30px;
        }

        .contact-details p {
            margin: 15px 0;
            display: flex;
            align-items: center;
            color: #995c00;
            transition: transform 0.3s ease;
        }

        .contact-details p:hover {
            transform: translateX(10px);
        }

        .contact-details i {
            margin-right: 15px;
            color: #cc7700;
        }

        .contact-image {
            border-radius: 10px;
            overflow: hidden;
            animation: zoomIn 1s ease-in-out;
        }

        .contact-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .contact-image:hover img {
            transform: scale(1.05);
        }

        .contact-form {
            background: linear-gradient(to bottom, #cc7700, #b35900);
            padding: 30px;
            border-radius: 10px;
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            background-color: #fff9e6;  /* Light cream color for the background */
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            color: #333;  /* Darker text color for better readability */
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #cc7700;  /* Highlight border with a vibrant color on focus */
            outline: none;
        }

        .send-btn {
            background: #ffcc66;  /* Brighter button color */
            color: #b35900;
            padding: 10px 30px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .send-btn:hover {
            transform: translateY(-3px);
        }

        .opening-hours {
            margin-top: 30px;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: #b35900;
            margin-right: 15px;
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .social-icons a:hover {
            transform: translateY(-5px);
        }

        .map-container {
            margin-top: 50px;
            width: 100%;
            height: 400px;
            background: #f5f5f5;
        }

        .faq-section {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .faq-item {
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding: 15px 0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            padding-left: 10px;
            background: rgba(204, 119, 0, 0.1);
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 500;
        }

        .faq-answer {
            display: none;
            padding: 15px 0;
            color: #995c00;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
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
    </style>
</head>
<body>
    <div class="hero">
        <h1>Our Contact</h1>
    </div>

    <div class="contact-section">
    <div class="contact-info">
        <h2>Get in Touch</h2>
        <p>Baik pelanggan setia maupun pengunjung baru, kami berharap dapat melayani Anda dan berbagi hasrat kami untuk masakan lezat.</p>
        
        <div class="contact-details">
            <p><i class="fas fa-map-marker-alt"></i> 777 Korean Wells, Harrisstreet</p>
            <p><i class="fas fa-phone"></i> +1 (234) 567 890 00</p>
            <p><i class="fas fa-envelope"></i> viaokta11223@gmail.com</p>
        </div>
    </div>
    
    <div class="contact-image">
        <div class="delivery-services">
            <h3>Order via Our Delivery Partners</h3>
            <div class="service-icons">
                <a href="https://www.go-jek.com/gofood" target="_blank">
                    <img src="image/gofood.jpg" alt="Go Food" style="width: 100px; height: auto; margin: 10px;">
                </a>
                <a href="https://www.grab.com/sg/food/" target="_blank">
                    <img src="image/grab.jpg" alt="Grab Food" style="width: 100px; height: auto; margin: 10px;">
                </a>
                <a href="https://www.shopee.co.id/" target="_blank">
                    <img src="image/speefood.jpg" alt="Shopee" style="width: 100px; height: auto; margin: 10px;">
                </a>
                <a href="https://www.tokopedia.com/" target="_blank">
                    <img src="image/tokopedia.jpg" alt="Tokopedia" style="width: 100px; height: auto; margin: 10px;">
                </a>
            </div>
        </div>
    </div>
</div>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Restaurant</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f7f5f1;
            color: #333;
        }

        .hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('image/maps.png'); /* URL gambar halaman home */
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            background-size: cover;
            background-position: center;
            animation: fadeIn 1.5s ease-in-out;
        }

        .hero h1 {
            font-size: 3rem;
            transition: transform 0.3s ease;
        }

        .hero h1:hover {
            transform: scale(1.05);
        }

        .contact-section {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            animation: fadeIn 1.5s ease-in-out;
        }

        .contact-info {
            padding: 20px;
            background-color: #fff5e6;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: slideInLeft 1s ease-in-out;
        }

        .contact-info h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #b35900;
        }

        .contact-details {
            margin-top: 30px;
        }

        .contact-details p {
            margin: 15px 0;
            display: flex;
            align-items: center;
            color: #995c00;
            transition: transform 0.3s ease;
        }

        .contact-details p:hover {
            transform: translateX(10px);
        }

        .contact-details i {
            margin-right: 15px;
            color: #cc7700;
        }

        .contact-image {
            border-radius: 10px;
            overflow: hidden;
            animation: zoomIn 1s ease-in-out;
        }

        .contact-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .contact-image:hover img {
            transform: scale(1.05);
        }

        .contact-form {
            background: linear-gradient(to bottom, #cc7700, #b35900);
            padding: 30px;
            border-radius: 10px;
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            background-color: #fff9e6; 
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            color: #333;  
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #cc7700;  
            outline: none;
        }

        .send-btn {
            background: #ffcc66;  
            color: #b35900;
            padding: 10px 30px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .send-btn:hover {
            transform: translateY(-3px);
        }

        .opening-hours {
            margin-top: 30px;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: #b35900;
            margin-right: 15px;
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .social-icons a:hover {
            transform: translateY(-5px);
        }

        .map-container {
            margin-top: 50px;
            width: 100%;
            height: 400px;
            background: #f5f5f5;
        }

        .faq-section {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .faq-item {
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding: 15px 0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            padding-left: 10px;
            background: rgba(204, 119, 0, 0.1);
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 500;
        }

        .faq-answer {
            display: none;
            padding: 15px 0;
            color: #995c00;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
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
    </style>
</head>
<body>
   
   </div>
        <div class="contact-section">
        <div class="contact-form">
            <form id="contactForm">
                <div class="form-group">
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <input type="tel" placeholder="Your Phone" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Your Message" rows="4" required></textarea>
                </div>
                <button type="submit" class="send-btn">Send Message</button>
            </form>
        </div>

        <div class="opening-hours">
            <h3>Opening Hours</h3>
            <p>Monday - Saturday: 8:00 AM - 10:00 PM</p>
            <p>Sunday: 9:00 AM - 11:00 PM</p>
            
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>

    <div class="map-container">
    <!-- Gambar Peta -->
    <img src="image/maps.png" alt="Restaurant Location Map" style="width: 100%; height: auto; border-radius: 10px; margin-bottom: 20px;">
    
    <!-- Link untuk melihat peta di Google Maps -->
    <div class="map-link-container" style="text-align: center; margin-top: 20px;">
        <a href="https://maps.app.goo.gl/Su1q5nuZCUsZyUJD6" target="_blank" style="font-size: 1.2rem; color: #b35900; text-decoration: none; font-weight: bold;">
            View on Google Maps
        </a>
    </div>
</div>

</div>
         

    <div class="faq-section">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <div class="faq-question">
                <span>How long has your restaurant been established?</span>
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-answer">
                Our restaurant has been serving customers since 2010.
            </div>
        </div>
        <!-- Add more FAQ items as needed -->
    </div>

    <script>
        // FAQ Toggle functionality
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('i');
                answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
                icon.classList.toggle('fa-plus');
                icon.classList.toggle('fa-minus');
            });
        });

        // Form submission handler
        document.getElementById('contactForm').addEventListener('submit', (e) => {
            e.preventDefault();
            // Add your form submission logic here
            alert('Message sent successfully!');
        });
    </script>
</body>

    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Message sent successfully!');
        });
    </script>

</body>
</html>