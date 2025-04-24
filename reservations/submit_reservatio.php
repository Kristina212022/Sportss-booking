<?php include '../includes/navbar.php'; ?>
<?php
$field = $_POST['field'] ?? 'football';
$date = $_POST['date'] ?? '';
$time = $_POST['time'] ?? '';

$fields_data = [
    'football' => [
        'name' => 'Фудбал Терен',
        'image' => '../img/footbal.webp'
    ],
    'tennis' => [
        'name' => 'Тенис Терен',
        'image' => '../img/tennis.webp'
    ],
    'basketball' => [
        'name' => 'Кошаркарски Терен',
        'image' => '../img/basketball.webp'
    ]
];

$selected_field = $fields_data[$field] ?? $fields_data['football'];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<style>
    body {
        background: linear-gradient(to right, #c9d6ff, #e2e2e2);
        font-family: 'Segoe UI', sans-serif;
    }
    .confirmation-container {
        margin-top: 40px;
        padding: 30px;
        background-color: white;
        border-radius: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    .confirmation-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 15px;
        margin-bottom: 20px;
    }
    .confirmation-message {
        font-size: 1.5rem;
        margin-bottom: 30px;
        color: #2c3e50;
    }
    .btn-back {
        background-color: #3498db;
        color: white;
        padding: 10px 25px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        display: inline-block;
    }
    .btn-back:hover {
        background-color: #2980b9;
        color: white;
        transform: translateY(-2px);
    }
</style>

<div class="container">
    <div class="confirmation-container">
        <h2 class="text-center mb-4 text-primary">Потврда за резервација</h2>
        
        <img src="<?= $selected_field['image'] ?>" alt="<?= htmlspecialchars($selected_field['name']) ?>" class="confirmation-img">
        
        <div class="confirmation-message">
            Успешно резервиравте за <strong><?= htmlspecialchars($selected_field['name']) ?></strong><br>
            на <strong><?= htmlspecialchars($date) ?></strong> во <strong><?= htmlspecialchars($time) ?></strong>
        </div>
        
        <a href='book.php' class='btn-back'>Назад кон почетна</a>
    </div>
</div>