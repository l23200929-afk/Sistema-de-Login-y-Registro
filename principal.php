<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-image: url('../LOGIN_REGISTAR/fondoprin.jpg');
            margin: 0;
            padding: 0;
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #2f3640;
            color: #fff;
            height: 100vh;
            padding: 30px 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            position: fixed;
        }

        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar a {
            display: block;
            color: #dcdde1;
            text-decoration: none;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #40739e;
        }

        .main-content {
            margin-left: 270px;
            padding: 40px;
            flex: 1;
        }

        .back-button {
            display: inline-block;
            margin-bottom: 20px;
            background-color: #66a6ff;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 16px;
            transition: background 0.3s;
        }

        .back-button:hover {
            background-color: #4d91ea;
        }

        h1 {
            text-align: center;
            color: #FFFFFF;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 40px;
            padding: 0 20px;
        }

        .card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card i {
            font-size: 40px;
            margin-bottom: 15px;
            color: #66a6ff;
        }

        .card p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Ansaldo 4.0</h2>
        <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
        <a href="perfil.php"><i class="fas fa-user"></i> Perfil</a>
        <a href="preguntas.php"><i class="fas fa-question-circle"></i> Preguntas</a>
        <a href="ayuda.php"><i class="fas fa-info-circle"></i> Ayuda</a>
        <a href="contactos.php"><i class="fas fa-envelope"></i> Contacto</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <a href="index.php" class="back-button"><i class="fas fa-arrow-left"></i> Regresar</a>
        <h1>Panel de Control</h1>
        <div class="grid-container">
            <div class="card">
                <i class="fas fa-server"></i>
                <p>Estado del sistema</p>
            </div>
            <div class="card">
                <i class="fas fa-chart-line"></i>
                <p>Métricas de rendimiento</p>
            </div>
            <div class="card">
                <i class="fas fa-history"></i>
                <p>Historial de operaciones</p>
            </div>
            <div class="card">
                <i class="fas fa-microchip"></i>
                <p>Datos de sensores</p>
            </div>
        </div>
    </div>
</body>
</html>