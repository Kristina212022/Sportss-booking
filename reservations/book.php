<?php include '../includes/navbar.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<style>
    body {
        background: linear-gradient(to right, #c9d6ff, #e2e2e2);
        font-family: 'Segoe UI', sans-serif;
    }
    .welcome-section {
        text-align: center;
        padding: 50px 20px;
    }
    .welcome-section h1 {
        font-weight: bold;
    }
    .card img {
        height: 200px;
        object-fit: cover;
    }
</style>

<div class="container">
    <div class="welcome-section">
        <h1>Добредојдовте во системот за резервации!</h1>
        <p>Изберете терен и резервирајте го вашиот термин со само неколку клика!</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Фудбал -->
        <div class="col">
            <div class="card">
                <img src="../img/footbal.webp" class="card-img-top" alt="Фудбал Терен">
                <div class="card-body">
                    <h5 class="card-title">Фудбал Терен</h5>
                    <p class="card-text">Идеален за 5-на-5 натпревари. Осветлување и гардероби.</p>
                    <a href="my_reservations.php?field=football" class="btn btn-primary">Резервирај</a>
                </div>
            </div>
        </div>

        <!-- Тенис -->
        <div class="col">
            <div class="card">
                <img src="../img/tennis.webp" class="card-img-top" alt="Тенис Терен">
                <div class="card-body">
                    <h5 class="card-title">Тенис Терен</h5>
                    <p class="card-text">Професионален терен со мрежа и рекети за изнајмување.</p>
                    <a href="my_reservations.php?field=tennis" class="btn btn-primary">Резервирај</a>
                </div>
            </div>
        </div>

        <!-- Кошарка -->
        <div class="col">
            <div class="card">
                <img src="../img/basketball.webp" class="card-img-top" alt="Кошаркарски Терен">
                <div class="card-body">
                    <h5 class="card-title">Кошаркарски Терен</h5>
                    <p class="card-text">Достапен за аматери и професионалци. Нови обрачи и подлога.</p>
                    <a href="my_reservations.php?field=basketball" class="btn btn-primary">Резервирај</a>
                </div>
            </div>
        </div>
    </div>
</div>
