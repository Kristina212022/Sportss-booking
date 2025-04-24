<?php
include '../config/db.php';
include '../includes/navbar.php';

$result = $conn->query("SELECT * FROM venues");
?>

<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <title>Терени</title>
    <link rel="stylesheet" href="../public/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-5">
        <h2>Сите спортски терени</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Име</th>
                    <th>Локација</th>
                    <th>Спорт</th>
                    <th>Цена (МКД)</th>
                    <th>Резервација</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row["name"]) ?></td>
                        <td><?= htmlspecialchars($row["location"]) ?></td>
                        <td><?= htmlspecialchars($row["sport_type"]) ?></td>
                        <td><?= htmlspecialchars($row["price"]) ?></td>
                        <td><a href="../reservations/book.php?venue_id=<?= $row["id"] ?>" class="btn btn-primary">Резервирај</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
