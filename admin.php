<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .custom-btn {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            /* Margin between buttons */
        }

        .custom-btn .material-icons {
            font-size: 48px;
        }

        .custom-btn p {
            font-size: 24px;
            font-weight: bold;
        }

        @media (max-width: 767px) {
            .custom-btn {
                margin-bottom: 10px;
                /* Adjust margin for smaller screens */
            }
        }

        .navbar {
            border: 2px solid #ccc;
            font-weight: bold;
        }

        .navbar-brand {
            font-size: 24px;
        }

        .navbar-text {
            text-align: center;
            flex: 1;
            font-size: 24px;
        }

        .navbar-logo {
            width: 50px;
            /* Adjust the width as needed */
            height: 50px;
            /* Adjust the height as needed */
        }

        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #f8f9fa;
            border-top: 2px solid #ccc;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="download.jpeg" alt="Logo" class="navbar-logo">
            </a>
            <div class="navbar-text"> <!-- Added navbar text div -->
                APLIKASI KAS RK-BMR
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-2">
                <a href="admin-masuk.php" class="btn btn-lg btn-block custom-btn mb-2">
                    <span class="material-icons">account_balance_wallet</span>
                    <p>Setor Dana</p>
                </a>
            </div>
            <div class="col-md-4 mt-2">
                <a href="admin-keluar.php" class="btn btn-lg btn-block custom-btn mb-2">
                    <span class="material-icons">attach_money</span>
                    <p>Tarik Dana</p>
                </a>
            </div>
            <div class="col-md-4 mt-2">
                <a href="admin-rekap.php" class="btn btn-lg btn-block custom-btn mb-2">
                    <span class="material-icons">monetization_on</span>
                    <p>Rekap Dana</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2023 Bendahara RK
    </div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>