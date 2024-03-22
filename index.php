<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <style>
        body {
            background-image: linear-gradient(to right, rgb(4, 181, 252), rgb(255, 0, 212), red);
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .card {
            width: 80%;
            max-width: 400px;
            margin: auto;
            /* Menggunakan 'auto' pada margin akan menengahkan secara horizontal */
            margin-top: 10vh;
            /* Memberikan jarak atas dengan menggunakan viewport height */
            margin-bottom: 10vh;
            /* Memberikan jarak bawah dengan menggunakan viewport height */
            height: 400px;
            border-radius: 10px;
            box-shadow: 0px 10px 20px 5px rgba(0, 0, 0, 0.4);
            padding: 20px;
            text-align: center;
            background-color: white;
            display: flex;
            /* Menggunakan flexbox */
            flex-direction: column;
            /* Menjadikan child elemen menjadi kolom */
            justify-content: center;
            /* Menengahkan secara vertikal */
        }


        .input {
            margin-bottom: 20px;
            padding: 9px;
            width: 80%;
            /* Menggunakan persentase agar input menyesuaikan dengan lebar card */
            border: none;
            border-bottom: 1px solid #ccc;
        }

        .input:focus {
            outline: none;
            border-bottom: 1px solid black;
        }

        .btnSubmit {
            /* width: 20px; */
            padding: 10px;
            border-radius: 5px;
            width: 50%;
            /* Menggunakan persentase agar tombol menyesuaikan dengan lebar card */
            border-color: azure;
            color: azure;
            border: 1px;
            box-shadow: 0px 5px 5px 2px rgba(0, 0, 0, 0.2);
            margin-top: 10px;
            font-weight: 900;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-image: linear-gradient(to right, rgb(4, 181, 252), rgb(255, 0, 212));
        }

        .btnRegister,
        .btnLogin {
            color: rgb(0, 183, 255);
            text-decoration: none;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: small;
        }

        form {
            margin-bottom: 20px;
        }

        .tampil {
            display: block;
        }

        .sembunyi {
            display: none;
        }

        .in {
            opacity: 1;
        }

        .out {
            opacity: 0;
            pointer-events: none;
        }

        /* Media queries */
        @media screen and (max-width: 600px) {
            .card {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="form-login">
                <h1 class="card-title">Login</h1>
                <form action="funtion/loginProses.php" class="Lform" method="post">
                    <input type="text" class="input login-user" name="username" id="" placeholder="Username">
                    <input type="password" class="input login-pass" name="password" id="" placeholder="Password"><br>
                    <button type="submit" class="btnSubmit">Submit</button>
                </form>
                <a class="btnRegister" href="#">Register?</a>
            </div>
            <div class="form-register sembunyi">
                <h1>Daftar</h1>
                <form action="">
                    <input type="text" class="input" name="" id="" placeholder="Nama lengkap">
                    <input type="text" class="input" name="" id="" placeholder="Username">
                    <input type="password" class="input" name="" id="" placeholder="Password">
                    <button type="submit" class="btnSubmit">Register</button>
                </form>
                <a class="btnLogin" href="">Masuk</a>
            </div>
        </div>
    </div>

</body>

</html>