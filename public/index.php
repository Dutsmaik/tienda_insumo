<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroStock - Sistema de Gestión Agrícola</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar-custom {
            background-color: #2e7d32; /* Tono verde agrícola */
        }
        .navbar-custom .navbar-brand, .navbar-custom .nav-link {
            color: #ffffff;
        }
        .navbar-custom .nav-link:hover {
            color: #c8e6c9;
        }
        .hero-section {
            background: linear-gradient(rgba(46, 125, 50, 0.8), rgba(46, 125, 50, 0.8)), url('https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 140px 0;
            text-align: center;
        }
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .hero-subtitle {
            font-size: 1.25rem;
            font-weight: 300;
            margin-bottom: 40px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        .btn-custom {
            background-color: #ffb300; /* Ámbar para contraste */
            color: #333;
            font-weight: 600;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #ffa000;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        .features-section {
            padding: 100px 0;
        }
        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            border: 1px solid rgba(0,0,0,0.05);
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        .feature-icon {
            font-size: 3.5rem;a
            color: #2e7d32;
            margin-bottom: 20px;
            display: inline-block;
        }
        .footer {
            background-color: #1b5e20;
            color: white;
            padding: 50px 0 20px;
        }
    </style>
</head>
<body>

    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
                <i class="bi bi-tree-fill me-2 fs-3"></i> AgroStock
            </a>
            <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="bi bi-list fs-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="#features">Características</a>
                    </li>
                    <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                        <a class="btn btn-outline-light rounded-pill px-4 fw-semibold" href="login.php">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Hero -->
    <header class="hero-section">
        <div class="container px-4">
            <h1 class="hero-title">Gestión Inteligente para tu Negocio Agrícola</h1>
            <p class="hero-subtitle">Optimiza tu inventario de insumos, controla tus ventas y maximiza el rendimiento de tu agro-negocio con nuestra plataforma integral y fácil de usar.</p>
            <a href="login.php" class="btn btn-custom btn-lg shadow-sm">Acceder al Sistema</a>
        </div>
    </header>

    <!-- Características -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="text-center mb-5 pb-3">
                <h2 class="fw-bold text-dark display-6 mb-3">Todo lo que necesitas en un solo lugar</h2>
                <p class="text-muted fs-5">Herramientas profesionales diseñadas específicamente para el sector de insumos agrícolas.</p>
            </div>
            <div class="row g-4">
                <!-- Tarjeta 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <i class="bi bi-boxes feature-icon"></i>
                        <h4 class="fw-bold mb-3">Control de Inventario</h4>
                        <p class="text-muted mb-0">Gestiona semillas, fertilizantes, agroquímicos y herramientas con precisión. Recibe alertas automáticas de stock mínimo y caducidad.</p>
                    </div>
                </div>
                <!-- Tarjeta 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <i class="bi bi-cart-check-fill feature-icon"></i>
                        <h4 class="fw-bold mb-3">Punto de Venta Rápido</h4>
                        <p class="text-muted mb-0">Registra ventas de manera ágil e intuitiva. Genera tickets, facturas y mantén un historial detallado de todas tus transacciones diarias.</p>
                    </div>
                </div>
                <!-- Tarjeta 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <i class="bi bi-graph-up-arrow feature-icon"></i>
                        <h4 class="fw-bold mb-3">Reportes Estratégicos</h4>
                        <p class="text-muted mb-0">Visualiza el rendimiento de tu negocio con gráficos interactivos. Analiza ingresos, productos más vendidos y toma mejores decisiones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <h5 class="fw-bold mb-2 d-flex align-items-center justify-content-center justify-content-md-start">
                        <i class="bi bi-tree-fill me-2 fs-4"></i>AgroStock
                    </h5>
                    <p class="text-light opacity-75 mb-0">El sistema líder en gestión integral de insumos agrícolas.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-light me-3 fs-4 opacity-75"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-light me-3 fs-4 opacity-75"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-light fs-4 opacity-75"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <hr class="border-light opacity-25 mb-4">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0 text-light opacity-75 small">&copy; 2024 AgroStock. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

