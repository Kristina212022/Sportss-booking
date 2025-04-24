<?php include '../includes/navbar.php'; ?>
<?php
$field = $_GET['field'] ?? 'football';

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

$selected_field = $fields_data[$field] ?? ['name' => 'Непознат терен', 'image' => '../img/default.jpg'];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<style>
    body {
        background: linear-gradient(to right, #f9f9f9, #e2e2e2);
        font-family: 'Segoe UI', sans-serif;
    }
    .reservation-container {
        margin-top: 40px;
        padding: 30px;
        background-color: white;
        border-radius: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .reservation-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 15px;
        margin-bottom: 20px;
    }
    .form-label {
        font-weight: 600;
    }
</style>

<div class="container">
    <div class="reservation-container">
        <h2 class="text-center mb-4 text-primary">Резервација за: <?= htmlspecialchars($selected_field['name']) ?></h2>

        <img src="<?= $selected_field['image'] ?>" alt="<?= htmlspecialchars($selected_field['name']) ?>" class="reservation-img">

        <form method="post" action="submit_reservation.php">
            <input type="hidden" name="field" value="<?= htmlspecialchars($field) ?>">

            <div class="mb-3">
                <label for="date" class="form-label">Изберете датум:</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="time" class="form-label">Изберете време:</label>
                <input type="time" name="time" id="time" class="form-control" required>
            </div>

            <div class="text-center">
                <a href="submit_reservatio.php" class="btn btn-primary">Потврди Резервација</a>
            </div>
        </form>
    </div>
</div>
