<?php
include '../config/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        $message = "<div class='alert alert-success'>Успешна регистрација! <a href='login.php'>Најави се</a></div>";
    } else {
        $message = "<div class='alert alert-danger'>Грешка при регистрација: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <title>Регистрација</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: linear-gradient(to right, #caa1f6, #6ca1fc);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Segoe UI', sans-serif;
    }
    .register-box {
        display: flex;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        max-width: 900px;
        width: 100%;
    }
    .register-img {
        flex: 1;
        background-color: #f0f0f0;
    }
    .register-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .register-form {
        flex: 1;
        padding: 40px;
    }
    .btn {
        border-radius: 8px;
    }
</style>
</head>
<body>

<div class="register-box">
    <div class="register-img">
        <img src="../img/img11.jfif" alt="Register Image">
    </div>
    <div class="register-form">
        <?php echo $message; ?>
        <h2 class="mb-4">Регистрација</h2>
        <form method="post" action="register.php">
            <div class="mb-3">
                <label for="name">Име и Презиме</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password">Лозинка</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Регистрирај се</button>
            <a href="login.php" class="btn btn-outline-secondary w-100 mt-2">Назад кон Најава</a>
        </form>
    </div>
</div>

</body>
</html>