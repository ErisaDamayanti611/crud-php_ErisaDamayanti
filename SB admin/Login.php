<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url("./brga.png");
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background-size: cover;
            background-repeat: no-repeat;
        }
      
        #login-box {
            max-width: 500px;
            height: 500px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-size: cover;
            padding: 30px;
        }

        #login-form {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* Latar belakang form transparan */
            padding: 20px;
            border-radius: 10px;
        }

        #register-link {
            margin-top: 20px;
            display: block;
            text-align: center;
            color: white; /* Warna teks Register here */
        }
    </style>
</head>

<body>

    <?php
    if (isset($_GET['pesan']) && $_GET['pesan'] == "gagal") {
        echo "<div class='alert alert-danger text-center'>Username dan Password tidak cocok!</div>";
    }
    ?>

    <div id="login-box" class="col-md-15">
        <form id="login-form" action="cek_lgin.php" method="POST">
            <h2 class="text-center text-black">LOGIN</h2>
            <div class="mb-3">
                <label for="username" class="form-label"></label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"></label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
            </div>
            <!-- Tambahkan elemen dropdown level di bawah kolom password -->
            <div class="mb-3">
                <label for="levelSelect" class="form-label"></label>
                <select class="form-select" name="selectedLevel" id="levelSelect">
                    <option value="admin">--Select level--</option>
                    <option value="admin">Admin</option>
                    <option value="dosen">Dosen</option>
                    <option value="mahasiswa">Mahasiswa</option>
                </select>
            </div>

            <div class="form-group text-center mt-5">
                <input type="submit" name="Login" class="btn btn-info btn-md text-white" value="Login">
            </div>
        </form>
        <a href="#" id="register-link">Register here</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-LpS+ciHALKr5ktgVDweeNx5+wrvjjtiKA+scE/JL8JxIYH1WsjN/RWHlFK94NykD"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-btBqOvJx99dM1IYjP2PswFib5luP/Cyo1bBFqVB+L8lVxvc9TOBhD2Ukh6z6bWB2"
        crossorigin="anonymous"></script>

</body>

</html>
