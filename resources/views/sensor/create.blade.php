<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Sensor</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            background-color: #f8f9fa;
        }

        /* Navbar */
        .navbar {
            background-color: #ffffff;
            padding: 14px 24px;
            border-bottom: 1px solid #ddd;
        }

        .navbar a {
            text-decoration: none;
            color: #000;
            font-weight: 500;
            margin-right: 20px;
        }

        /* Container */
        .container {
            background-color: #ffffff;
            margin: 20px;
            padding: 40px;
            border-radius: 8px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 30px;
        }

        /* Form */
        .form-group {
            margin-bottom: 20px;
            max-width: 300px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            background-color: #0d6efd;
            color: #ffffff;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>

<body> <!-- Navbar -->
    <div class="navbar"> <a href="#">Sensor</a> <a href="#">Home</a> </div> <!-- Content -->
    <div class="container">
        <h1>Tambah Data Sensor</h1>
        <form action="{{ route('sensor.store') }}" method="POST">
            @csrf

            <div class="form-group"> <label for="nama">Nama Sensor</label> <input type="text" id="nama"
                    name="nama_sensor"> </div>
            <div class="form-group"> <label for="data">Data</label> <input type="number" id="data"
                    name="data_sensor"> </div> <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
