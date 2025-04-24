<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: users/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Почетна - Систем за резервации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #c9d6ff, #e2e2e2);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }
        .welcome-container {
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 90%;
            text-align: center;
        }
        .welcome-title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 30px;
            font-size: 2.2rem;
        }
        .btn-custom {
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            min-width: 200px;
            margin: 10px;
        }
        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
        }
        .btn-success {
            background-color: #2ecc71;
            border-color: #2ecc71;
        }
        .btn-danger {
            background-color: #e74c3c;
            border-color: #e74c3c;
        }
        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .button-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center p-3">

    <div class="welcome-container">
        <h1 class="welcome-title">Добредојдовте на апликацијата за резервација на спортски терени!</h1>
        
        <div class="button-group">
            <a href="reservations/book.php" class="btn btn-primary btn-custom">
                <i class="fas fa-map-marker-alt me-2"></i> Прегледај терени
            </a>
            <a href="reservations/my_reservations.php" class="btn btn-success btn-custom">
                <i class="fas fa-calendar-check me-2"></i> Мои резервации
            </a>
            <a href="users/logout.php" class="btn btn-danger btn-custom">
                <i class="fas fa-sign-out-alt me-2"></i> Одјави се
            </a>
        </div>
    </div>

    <!-- Font Awesome за икони -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>