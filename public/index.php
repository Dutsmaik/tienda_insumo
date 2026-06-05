<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroStock - Sistema de Control de Inventario y Ventas Agrícolas</title>
    <meta name="description" content="Sistema profesional e inteligente para la gestión de inventario, control de stock y punto de venta para insumos agrícolas. Optimice su negocio hoy.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <style>
        :root {
            --primary-color: #1b5e20;
            --primary-light: #2e7d32;
            --primary-dark: #0d2c10;
            --accent-color: #26a69a;
            --warning-accent: #f57c00;
            --bg-light: #f8faf7;
            --text-main: #2d3748;
            --text-muted: #718096;
            --card-shadow: 0 10px 30px rgba(27, 94, 32, 0.05);
            --transition-smooth: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-main);
            background-color: var(--bg-light);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: var(--primary-dark);
        }

        /* Navbar Custom */
        .navbar {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.9);
            border-bottom: 1px solid rgba(27, 94, 32, 0.08);
            padding: 1rem 0;
            transition: var(--transition-smooth);
        }

        .navbar-brand {
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--primary-color) !important;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .navbar-brand i {
            color: var(--accent-color);
        }

        .nav-link {
            color: var(--text-main) !important;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.5rem 1.2rem !important;
            transition: var(--transition-smooth);
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .btn-system-primary {
            background-color: var(--primary-color);
            color: #ffffff;
            font-weight: 600;
            border-radius: 8px;
            padding: 0.6rem 1.5rem;
            border: 2px solid transparent;
            transition: var(--transition-smooth);
        }

        .btn-system-primary:hover {
            background-color: var(--primary-light);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(27, 94, 32, 0.2);
        }

        .btn-system-secondary {
            background-color: transparent;
            color: var(--primary-color);
            font-weight: 600;
            border-radius: 8px;
            padding: 0.6rem 1.5rem;
            border: 2px solid var(--primary-color);
            transition: var(--transition-smooth);
        }

        .btn-system-secondary:hover {
            background-color: var(--primary-color);
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero-section {
            padding: 8rem 0 5rem 0;
            background: radial-gradient(circle at 10% 20%, rgba(129, 199, 132, 0.08) 0%, rgba(255, 255, 255, 0) 90%);
            position: relative;
        }

        .hero-title {
            font-size: 3.5rem;
            line-height: 1.15;
            margin-bottom: 1.5rem;
        }

        .hero-title span {
            color: var(--primary-color);
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
            font-size: 1.15rem;
            color: var(--text-muted);
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        /* Feature Card */
        .feature-card {
            background: #ffffff;
            border: 1px solid rgba(27, 94, 32, 0.05);
            border-radius: 16px;
            padding: 2.2rem;
            box-shadow: var(--card-shadow);
            transition: var(--transition-smooth);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(27, 94, 32, 0.08);
            border-color: rgba(38, 166, 154, 0.2);
        }

        .feature-icon-wrapper {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background-color: rgba(27, 94, 32, 0.06);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            font-size: 1.6rem;
            transition: var(--transition-smooth);
        }

        .feature-card:hover .feature-icon-wrapper {
            background-color: var(--primary-color);
            color: #ffffff;
        }

        /* Interactive Dashboard Preview */
        .dashboard-preview {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(0, 0, 0, 0.04);
            padding: 1.5rem;
            position: relative;
        }

        .dashboard-header {
            border-bottom: 1px solid #f0f2f5;
            padding-bottom: 1rem;
            margin-bottom: 1rem;
        }

        .window-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 6px;
        }

        .dot-red { background-color: #ff5f56; }
        .dot-yellow { background-color: #ffbd2e; }
        .dot-green { background-color: #27c93f; }

        .stock-indicator {
            background-color: #fafbfc;
            border: 1px solid #edf2f7;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 1rem;
        }

        .stock-progress-bar {
            height: 8px;
            border-radius: 4px;
        }

        /* Stats Badge */
        .stat-badge {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            color: white;
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 10px 20px rgba(27, 94, 32, 0.15);
        }

        .stat-val {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 0.2rem;
        }

        .stat-label {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.9;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary-dark) 0%, #061507 100%);
            color: #ffffff;
            border-radius: 24px;
            padding: 5rem 3rem;
            margin-top: 5rem;
            margin-bottom: 5rem;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(38, 166, 154, 0.15) 0%, transparent 70%);
            border-radius: 50%;
        }

        /* Footer */
        footer {
            background-color: #0f1d10;
            color: rgba(255, 255, 255, 0.7);
            padding: 4rem 0 2rem 0;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        footer h5 {
            color: #ffffff;
            margin-bottom: 1.5rem;
        }

        footer a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        footer a:hover {
            color: var(--accent-color);
        }
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-shield-fill-check"></i>
                <span>AgroStock</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#modulos">Módulos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vista-previa">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#beneficios">Beneficios</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="../Views/auth/login.php" class="btn btn-system-secondary btn-sm me-2">Ingresar</a>
                        <a href="../Views/auth/register.php" class="btn btn-system-primary btn-sm">Registro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill mb-3">
                        <i class="bi bi-stars me-1"></i> Control de Stock & Punto de Venta
                    </span>
                    <h1 class="hero-title">
                        Gestión inteligente para sus <span>Insumos Agrícolas</span>
                    </h1>
                    <p class="hero-subtitle">
                        Automatice el control de semillas, fertilizantes, pesticidas y herramientas en tiempo real. Reduzca pérdidas por caducidad y controle cada transacción con nuestro Punto de Venta optimizado para el campo.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="../Views/auth/login.php" class="btn btn-system-primary btn-lg">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Acceder al Sistema
                        </a>
                        <a href="#modulos" class="btn btn-system-secondary btn-lg">
                            Ver Módulos
                        </a>
                    </div>
                </div>
                
                <!-- Live Interactive Mockup -->
                <div class="col-lg-6">
                    <div class="dashboard-preview">
                        <div class="dashboard-header d-flex justify-content-between align-items-center">
                            <div>
                                <span class="window-dot dot-red"></span>
                                <span class="window-dot dot-yellow"></span>
                                <span class="window-dot dot-green"></span>
                            </div>
                            <span class="badge bg-light text-dark border"><i class="bi bi-clock me-1"></i>Monitoreo en Vivo</span>
                        </div>
                        
                        <h5 class="mb-4 text-secondary-emphasis"><i class="bi bi-speedometer2 me-2 text-success"></i>Estado del Inventario</h5>
                        
                        <!-- Stock Status Progress Bars -->
                        <div class="stock-indicator">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-semibold">Fertilizante NPK Super</span>
                                <span class="text-danger fw-bold"><i class="bi bi-exclamation-triangle-fill me-1"></i>Crítico (12 Sacos)</span>
                            </div>
                            <div class="progress stock-progress-bar">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="stock-indicator">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-semibold">Semilla Híbrida de Maíz G4</span>
                                <span class="text-success fw-bold">Óptimo (140 Cajas)</span>
                            </div>
                            <div class="progress stock-progress-bar">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="stock-indicator">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-semibold">Fungicida Orgánico Control</span>
                                <span class="text-warning fw-bold">Por agotar (45 Litros)</span>
                            </div>
                            <div class="progress stock-progress-bar">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <!-- Mini Stats Footer inside dashboard mockup -->
                        <div class="row g-2 mt-3 text-center">
                            <div class="col-4">
                                <div class="p-2 border rounded bg-light">
                                    <div class="fw-bold text-success">86%</div>
                                    <div class="small text-muted" style="font-size: 0.75rem;">Disponibilidad</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="p-2 border rounded bg-light">
                                    <div class="fw-bold text-warning">3</div>
                                    <div class="small text-muted" style="font-size: 0.75rem;">Alertas Stock</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="p-2 border rounded bg-light">
                                    <div class="fw-bold text-primary">120+</div>
                                    <div class="small text-muted" style="font-size: 0.75rem;">Productos</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Modules / Features Section -->
    <section id="modulos" class="py-5 bg-white">
        <div class="container py-4">
            <div class="text-center max-width-600 mx-auto mb-5">
                <h2 class="display-6 mb-3">Módulos del Sistema AgroStock</h2>
                <p class="text-muted">Desarrollado específicamente para atender las necesidades del sector agropecuario comercial.</p>
            </div>
            
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <h4>Control de Inventario</h4>
                        <p class="text-muted">Registro detallado de insumos con fecha de caducidad, lotes, marcas, concentraciones químicas e instrucciones de almacenamiento.</p>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-cart3"></i>
                        </div>
                        <h4>Punto de Venta (POS)</h4>
                        <p class="text-muted">Facturación rápida, cobros integrados, cotizaciones automáticas y registro instantáneo de ventas diarias en mostrador.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4>Alertas & Reportes</h4>
                        <p class="text-muted">Notificaciones en tiempo real cuando un insumo esté próximo a agotarse o a expirar para asegurar reabastecimientos oportunos.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h4>Proveedores & Compras</h4>
                        <p class="text-muted">Gestión de proveedores locales e internacionales, historial de órdenes de compra y cálculo preciso del costo medio de adquisición.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4>Clientes & Crédito</h4>
                        <p class="text-muted">Cartera de clientes con registro de compras, control de plazos de crédito para insumos de cosecha y límites de saldo.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-phone-vibrate"></i>
                        </div>
                        <h4>Responsive & Accesible</h4>
                        <p class="text-muted">Acceda desde su tablet o teléfono inteligente directamente en las bodegas o parcelas sin pérdida de funcionalidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Showcase Stats -->
    <section id="vista-previa" class="py-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="display-6 mb-3">Maximice el rendimiento de su negocio de insumos</h2>
                    <p class="text-muted mb-4">
                        Nuestra herramienta centraliza sus operaciones comerciales y logísticas. Olvídese de las planillas en papel y los registros manuales propensos a errores.
                    </p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="stat-badge">
                                <div class="stat-val">+35%</div>
                                <div class="stat-label">Eficiencia Operativa</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-badge bg-dark">
                                <div class="stat-val">0%</div>
                                <div class="stat-label">Pérdida de Stock</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="p-4 bg-white rounded-4 shadow-sm border border-light">
                        <h5 class="mb-3"><i class="bi bi-activity me-2 text-success"></i>Historial Reciente de Ventas</h5>
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Cliente</th>
                                        <th>Detalle Insumos</th>
                                        <th class="text-end">Total</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hoy, 14:32</td>
                                        <td>Agrícola San José</td>
                                        <td class="small text-muted">20 sacos Urea, 5L Herbicida</td>
                                        <td class="text-end fw-bold">$420.00</td>
                                        <td><span class="badge bg-success-subtle text-success">Pagado</span></td>
                                    </tr>
                                    <tr>
                                        <td>Hoy, 11:15</td>
                                        <td>Manuel Flores</td>
                                        <td class="small text-muted">10 bolsas Semilla G4</td>
                                        <td class="text-end fw-bold">$680.00</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Crédito</span></td>
                                    </tr>
                                    <tr>
                                        <td>Ayer, 16:50</td>
                                        <td>Finca El Mirador</td>
                                        <td class="small text-muted">3 Aspersores, 12L Fungicida</td>
                                        <td class="text-end fw-bold">$315.00</td>
                                        <td><span class="badge bg-success-subtle text-success">Pagado</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <div class="container" id="beneficios">
        <div class="cta-section text-center">
            <h2 class="display-5 fw-bold mb-3">¿Listo para modernizar su inventario agrícola?</h2>
            <p class="lead opacity-75 mb-4 max-width-600 mx-auto">
                Gestione de manera profesional su stock de agroquímicos, fertilizantes y herramientas. Evite multas de regulación y aumente su rentabilidad.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="../Views/auth/login.php" class="btn btn-light btn-lg px-4 py-3 text-dark fw-bold">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Iniciar Sesión
                </a>
                <a href="../Views/auth/register.php" class="btn btn-outline-light btn-lg px-4 py-3">
                    Crear Cuenta Demo
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-lg-4">
                    <h5 class="fw-bold text-success mb-3"><i class="bi bi-shield-fill-check me-2"></i>AgroStock</h5>
                    <p class="small text-muted">
                        El sistema definitivo de stock, inventario y punto de venta para distribuidoras de insumos agrícolas y agro-servicios.
                    </p>
                </div>
                <div class="col-6 col-lg-2">
                    <h5>Enlaces</h5>
                    <ul class="list-unstyled">
                        <li><a href="#modulos">Módulos</a></li>
                        <li><a href="#vista-previa">Dashboard</a></li>
                        <li><a href="#beneficios">Beneficios</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h5>Sistema</h5>
                    <ul class="list-unstyled">
                        <li><a href="../Views/auth/login.php">Iniciar Sesión</a></li>
                        <li><a href="../Views/auth/register.php">Registrarse</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Tecnologías</h5>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-secondary-subtle text-secondary border">Bootstrap 5</span>
                        <span class="badge bg-secondary-subtle text-secondary border">HTML5 & CSS3</span>
                        <span class="badge bg-secondary-subtle text-secondary border">PHP 8</span>
                        <span class="badge bg-secondary-subtle text-secondary border">Responsive</span>
                    </div>
                </div>
            </div>
            <div class="border-top border-secondary pt-3 text-center text-muted small">
                <p class="mb-0">&copy; 2026 AgroStock. Todos los derechos reservados. Diseñado a nivel profesional.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
