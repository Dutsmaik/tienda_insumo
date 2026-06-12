<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario - AgroStock</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- SweetAlert2 CSS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        :root {
            --primary-color: #1b5e20;
            --primary-light: #2e7d32;
            --primary-dark: #0d2c10;
            --accent-color: #26a69a;
            --bg-light: #f4f7f4;
            --text-main: #2d3748;
            --text-muted: #718096;
            --transition-smooth: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-main);
            background-color: var(--bg-light);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-container {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(27, 94, 32, 0.06);
            overflow: hidden;
            width: 100%;
            max-width: 1000px;
            min-height: 600px;
            border: 1px solid rgba(27, 94, 32, 0.05);
        }

        /* Left Side Info Panel */
        .auth-sidebar {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-color) 100%);
            color: #ffffff;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .auth-sidebar::before {
            content: '';
            position: absolute;
            bottom: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(38, 166, 154, 0.2) 0%, transparent 70%);
            border-radius: 50%;
        }

        .sidebar-logo {
            font-family: 'Outfit', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #ffffff;
            text-decoration: none;
        }

        .sidebar-logo i {
            color: var(--accent-color);
        }

        /* Form Styling */
        .auth-form-wrapper {
            padding: 3rem;
        }

        .form-title {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 0.5rem;
        }

        .form-control, .form-select {
            border-radius: 10px;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            font-size: 0.95rem;
            transition: var(--transition-smooth);
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(38, 166, 154, 0.15);
        }

        .form-label {
            font-weight: 600;
            font-size: 0.85rem;
            color: var(--text-main);
            margin-bottom: 0.5rem;
        }

        .btn-auth-submit {
            background-color: var(--primary-color);
            color: #ffffff;
            font-weight: 600;
            padding: 0.75rem;
            border-radius: 10px;
            border: none;
            transition: var(--transition-smooth);
            width: 100%;
        }

        .btn-auth-submit:hover {
            background-color: var(--primary-light);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(27, 94, 32, 0.2);
        }

        .input-group-text {
            background-color: transparent;
            border-color: #e2e8f0;
            color: var(--text-muted);
            border-radius: 10px;
            cursor: pointer;
        }

        .back-home {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--transition-smooth);
        }

        .back-home:hover {
            color: var(--primary-color);
        }
    </style>
</head>
<body>

    <div class="container d-flex justify-content-center py-5">
        <div class="auth-container shadow row g-0">
            
            <!-- Left Side Info Panel -->
            <div class="col-lg-5 auth-sidebar d-none d-lg-flex">
                <div>
                    <a href="../../public/index.php" class="sidebar-logo mb-4">
                        <i class="bi bi-shield-fill-check"></i>
                        <span>AgroStock</span>
                    </a>
                    <h3 class="fw-bold text-white mb-3">Únase a la plataforma</h3>
                    <p class="opacity-75 small">
                        Registre su cuenta y comience a administrar el inventario de agroquímicos, semillas y fertilizantes de forma óptima.
                    </p>
                </div>
                
                <div>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-shield-check text-success"></i>
                        <span class="small">Roles y permisos configurables</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-shield-check text-success"></i>
                        <span class="small">Control de auditorías por usuario</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-shield-check text-success"></i>
                        <span class="small">Acceso seguro encriptado</span>
                    </div>
                </div>

                <div class="pt-4 border-top border-secondary small text-white-50">
                    &copy; 2026 AgroStock. Eficiencia para el campo.
                </div>
            </div>

            <!-- Right Side Form -->
            <div class="col-lg-7 d-flex align-items-center">
                <div class="auth-form-wrapper w-100">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="../../public/index.php" class="back-home">
                            <i class="bi bi-arrow-left"></i> Volver al Inicio
                        </a>
                    </div>

                    <h2 class="form-title">Crear Cuenta</h2>
                    <p class="text-muted small mb-4">Ingrese la información requerida para registrar un nuevo usuario.</p>

                    <form action="../../Controllers/auth/registerController.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre Usuario" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@email.com" required>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label">Contraseña</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                            </div>
                        </div>

                        <div class="mb-4 form-check d-flex align-items-start gap-2">
                            <input type="checkbox" class="form-check-input bg-transparent border-secondary mt-1" id="terms" name="terms" required>
                            <label class="form-check-label text-secondary small" for="terms">
                                Acepto los <a href="#" class="text-link">Términos de Servicio</a> y la <a href="#" class="text-link">Política de Privacidad</a>.
                            </label>
                            <div class="invalid-feedback">Debes aceptar los términos para registrarte.</div>
                        </div>                        
                        <button type="submit" class="btn btn-auth-submit mb-4">
                            <i class="bi bi-person-plus me-2"></i>Registrar Cuenta
                        </button>

                        <div class="text-center">
                            <span class="small text-muted">¿Ya tiene una cuenta? </span>
                            <a href="login.php" class="small fw-bold text-success text-decoration-none">Iniciar Sesión aquí</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
