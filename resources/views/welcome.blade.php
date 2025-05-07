<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore - IT & Electronics</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .navbar-brand img {
            max-height: 50px;
        }
        .category-menu {
            background-color: #f8f9fa;
            padding: 10px 0;
        }
        .category-menu a {
            color: #333;
            text-decoration: none;
            margin-right: 15px;
        }
        .category-menu a:hover {
            color: #007bff;
        }
        .product-card img {
            height: 200px;
            object-fit: cover;
        }
        footer {
            background-color: #343a40;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="TechStore Logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Promotions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                @if(Auth::check())
                    <span class="navbar-text me-3">Welcome, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-secondary">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-light text-center py-5">
        <div class="container">
        <img src="{{ asset('images/banner.png') }}" alt="Banner">
        </div>
    </header>

    <!-- Category Menu -->
    <div class="category-menu text-center">
        <div class="container">
            <a href="#">Laptops</a>
            <a href="#">Desktops</a>
            <a href="#">Smartphones</a>
            <a href="#">Accessories</a>
            <a href="#">Gaming</a>
        </div>
    </div>

    <!-- Products Section -->
    <section id="products" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Featured Products</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card product-card">
                    <img src="{{ asset('images/laptop.jpg') }}" alt="Laptop">
                    <div class="card-body">
                            <h5 class="card-title">Laptop</h5>
                            <p class="card-text">High-performance laptops for work and play.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                    <img src="{{ asset('images/smartphone.jpg') }}" alt="Smartphone">
                    <div class="card-body">
                            <h5 class="card-title">Smartphone</h5>
                            <p class="card-text">Latest smartphones with cutting-edge technology.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                    <img src="{{ asset('images/pc.jpg') }}" alt="PC Components">
                    <div class="card-body">
                            <h5 class="card-title">PC Components</h5>
                            <p class="card-text">Top-quality components for building your dream PC.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                    <img src="{{ asset('images/accessories.jpg') }}" alt="Accessories">
                    <div class="card-body">
                            <h5 class="card-title">Accessories</h5>
                            <p class="card-text">Essential accessories for your devices.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4">
        <div class="container">
            <p>&copy; 2025 TechStore. All rights reserved.</p>
            <p>Contact us: support@techstore.com | Hotline: 1800-1234</p>
            <div>
                <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>