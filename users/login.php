<?php
session_start();
require_once "../config/db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user_id"] = $user["id"];
        header("Location: ../reservations/book.php");
        exit;
    } else {
        $message = "Неточна email адреса или лозинка!";
    }
}
?>

<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <title>Најава</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #8360c3, #2ebf91);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            max-width: 700px;
            width: 100%;
            display: flex;
        }
        .login-img img {
            max-width: 250px;
            border-radius: 10px;
        }
        .login-form {
            flex-grow: 1;
            margin-left: 30px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="login-img">
            <img src="../img/img1.jfif" alt="Login Image">
        </div>
        <div class="login-form">
            <?php if (!empty($message)) echo "<p class='text-danger'>$message</p>"; ?>
            <h2 class="mb-4">Најава</h2>
            <form method="post" action="login.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Лозинка</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Најави се</button>
                <div class="text-center mt-3">
                    <a href="register.php" class="btn btn-link">Регистрирај се</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
