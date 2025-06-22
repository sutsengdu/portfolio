<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Products | Myitkyina Solar Solutions</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #00bcd4;
            --secondary: #2196f3;
            --accent: #ff9800;
            --light: #e0e7ef;
            --dark: #0a0f1a;
        }
        body {
            background: linear-gradient(120deg, #0a0f1a 0%, #181f2a 100%);
            color: var(--light);
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }
        .navbar {
            background: linear-gradient(90deg, #0a0f1a 0%, #181f2a 100%);
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff !important;
            transition: transform 0.3s ease;
        }
        .navbar-brand:hover {
            transform: scale(1.05);
            color: var(--primary) !important;
        }
        @media (max-width: 991.98px) {
            .navbar {
                padding: 0.5rem 0;
            }
            .navbar-brand {
                font-size: 1.2rem;
            }
        }
        .btn-primary, .btn-primary:visited {
            background: var(--primary);
            border: none;
            color: #18181b;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-primary:hover, .btn-primary:focus {
            background: var(--secondary);
            color: #fff;
        }
        .product-list-section {
            padding: 60px 0 40px 0;
        }
        .product-card {
            background: rgba(24, 31, 42, 0.92);
            color: var(--light);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            border: 1.5px solid #2196f3;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .product-card:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: 0 10px 30px #00bcd455;
            border-color: #00bcd4;
        }
        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }
        .product-card .card-body {
            padding: 1.5rem;
        }
        .product-card .card-title {
            color: var(--primary);
            font-size: 1.2rem;
            font-weight: 600;
        }
        .product-card .card-text {
            color: #e0e7ef;
            font-size: 0.98rem;
        }
        .product-card .btn {
            margin-top: 1rem;
        }
        footer {
            background: linear-gradient(90deg, #0a0f1a 0%, #181f2a 100%) !important;
            color: #fff;
            border-top: 3px solid var(--secondary);
        }
        .text-light-emphasis {
            color: rgba(255, 255, 255, 0.8) !important;
        }
        .hover-primary {
            transition: all 0.3s ease;
        }
        .hover-primary:hover {
            color: var(--accent) !important;
            transform: translateY(-1px);
        }
        footer h5 {
            color: #ffffff;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        footer ul li a {
            font-size: 0.95rem;
            font-weight: 500;
        }
        footer .social-icons a {
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }
        footer .social-icons a:hover {
            transform: translateY(-3px);
        }
        footer hr {
            opacity: 0.1;
        }
    </style>
</head>
<body>
    <!-- Header/Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="solar_shop.php">
                <i class="fas fa-solar-panel me-2"></i>Myitkyina Solar Solutions
            </a>
        </div>
    </nav>

    <!-- Product List Section -->
    <section class="product-list-section">
        <div class="container">
            <h2 class="text-center mb-5">Our Solar Products</h2>
            <div class="row g-4">
                <!-- Product Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Solar Panel" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">MonoX 400W Solar Panel</h5>
                            <p class="card-text">High-efficiency monocrystalline panel, perfect for home and business installations. 25-year warranty.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Solar Inverter" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">SunPower Inverter 5kW</h5>
                            <p class="card-text">Reliable inverter for optimal energy conversion. Smart monitoring and easy installation.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Product Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://images.unsplash.com/photo-1509395176047-4a66953fd231?auto=format&fit=crop&w=600&q=80" alt="Solar Battery" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">EcoBattery 10kWh</h5>
                            <p class="card-text">Store your solar energy for night use or outages. Long lifespan and high safety standards.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Add more product cards as needed -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3">About Myitkyina Solar Solutions</h5>
                    <p class="text-light-emphasis">Your trusted partner in solar energy solutions. We provide high-quality solar products and expert installation services.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-white">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-1">
                            <a href="#" class="text-white text-decoration-none">Home</a>
                        </li>
                        <li class="mb-1">
                            <a href="solar_list.php" class="text-white text-decoration-none">Products</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-phone me-2"></i>09 773 640 825</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i>info@solarshop.com</li>
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Pyihtawngsu Set Sat Street, Myitkyina</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-light-emphasis">&copy; 2024 Myitkyina Solar Solutions. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <a href="#" class="text-light-emphasis text-decoration-none me-3 hover-primary"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-light-emphasis text-decoration-none me-3 hover-primary"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light-emphasis text-decoration-none me-3 hover-primary"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light-emphasis text-decoration-none hover-primary"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html> 