<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Sensor</title>
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
      max-width: 400px;
    }

    h1 {
      font-size: 28px;
      margin-bottom: 30px;
    }

    /* Form */
    .form-group {
      margin-bottom: 20px;
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

    .btn {
      background-color: #0d6efd;
      color: #ffffff;
      border: none;
      padding: 10px 18px;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
      text-decoration: none;
    }

    .btn-secondary {
      background-color: #6c757d;
      margin-left: 10px;
    }

    .btn:hover {
      opacity: 0.9;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <a href="{{ route('sensor.index') }}">Sensor</a>
    <a href="#">Home</a>
  </div>

  <!-- Content -->
  <div class="container">
    <h1>Edit Data Sensor</h1>

    <form action="{{ route('sensor.update', $sensor->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label>Nama Sensor</label>
        <input type="text" name="nama_sensor" value="{{ $sensor->nama_sensor }}" required>
      </div>

      <div class="form-group">
        <label>Data Sensor</label>
        <input type="number" name="data_sensor" value="{{ $sensor->data_sensor }}" required>
      </div>

      <button type="submit" class="btn">Update</button>
      <a href="{{ route('sensor.index') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>

</body>
</html>
