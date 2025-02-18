<!DOCTYPE html>
<html>
<head>
    <title>Login - Aplikasi Pembayaran SPP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
        }
        .login-container {
            margin-top: 100px; /* Jarak dari atas */
        }
        .login-form {
            padding: 20px;
            background-color: #ffffff; /* Warna latar belakang form */
            border-radius: 5px; /* Radius sudut */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center login-container">
            <div class="col-md-6">
                <div class="login-form">
                    <h2 class="text-center">Login Administrator</h2>
                    <form action="cek_login.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>