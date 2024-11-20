<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Advanced Footer</title>
    <style>
        .footer {
            background-color: #1a1a1a;
            color: #ffffff;
            padding: 40px 0;
        }
        .footer-logo img {
            width: 120px;
            margin-bottom: 10px;
        }
        .footer h5 {
            color: #ffffff;
            margin-bottom: 15px;
            font-weight: 600;
        }
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        .footer-links ul li a {
            color: #cccccc;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer-links ul li a:hover {
            color: #ffffff;
        }
        .footer-contact p, .footer-contact a {
            color: #cccccc;
            margin: 0;
            line-height: 1.8;
        }
        .footer-subscribe input[type="email"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #333;
            border-radius: 20px;
            margin-bottom: 10px;
            outline: none;
        }
        .footer-subscribe .btn-subscribe {
            background-color: #ff6b6b;
            color: #ffffff;
            padding: 8px 20px;
            border-radius: 20px;
            transition: background-color 0.3s;
            border: none;
        }
        .footer-subscribe .btn-subscribe:hover {
            background-color: #ff4d4d;
        }
        .footer-social a {
            color: #cccccc;
            font-size: 18px;
            margin: 0 10px;
            transition: color 0.3s;
        }
        .footer-social a:hover {
            color: #ffffff;
        }
        .footer hr {
            border-color: #444;
        }
    </style>
</head>
<body>
    <!-- Footer Section Starts Here -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Logo and Description -->
                <div class="col-lg-4 col-md-6 footer-logo">
                    <a href="index.php"><img src="https://img.freepik.com/free-vector/kombucha-logo-design-template_23-2150047440.jpg" alt="Juice Logo" class="footer-logo-img"></a>
                    <p>Refreshing and nutritious fruit juices made from the finest ingredients. Taste the freshness in every sip!</p>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 footer-links">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Juices</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h5>Contact Us</h5>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Juice St, Fresh City, Fruitania</p>
                    <p><i class="fas fa-phone-alt"></i> +1 (123) 456-7890</p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:support@fruitjuice.com">support@fruitjuice.com</a></p>
                </div>

                <!-- Newsletter Subscription -->
                <div class="col-lg-3 col-md-6 footer-subscribe">
                    <h5>Subscribe</h5>
                    <p>Get the latest updates and offers on our juices.</p>
                    <form action="#" method="POST" class="subscribe-form">
                        <input type="email" name="email" placeholder="Your email" required>
                        <button type="submit" class="btn-subscribe">Subscribe</button>
                    </form>
                </div>
            </div>

            <hr>

            <!-- Social Media Links -->
            <div class="footer-social text-center">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>

            <!-- Copyright -->
            <p class="text-center mt-3">© 2024 Fruit Juice Co. All rights reserved. Designed by FruitJuiceDesign.</p>
        </div>
    </footer>
    <!-- Footer Section Ends Here -->
</body>
</html>
