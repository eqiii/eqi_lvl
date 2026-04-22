<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Device</title>

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
  <a href="{{ route('device.index') }}">Device</a>
</div>

<!-- Content -->
<div class="container">
<h1>Edit Device</h1>

<form action="{{ route('device.update', $device->id) }}" method="POST">
@csrf
@method('PUT')

<div class="form-group">
  <label>Serial Number</label>
  <input type="text" name="serial_number" value="{{ $device->serial_number }}" required>
</div>

<div class="form-group">
  <label>Topik</label>
  <input type="text" name="topik" value="{{ $device->topik }}" required>
</div>

<div class="form-group">
  <label>Time</label>
  <input type="datetime-local" name="time" value="{{ \Carbon\Carbon::parse($device->time)->format('Y-m-d\TH:i') }}">
</div>

<button type="submit" class="btn">Update</button>
<a href="{{ route('device.index') }}" class="btn btn-secondary">Batal</a>

</form>
</div>

</body>
</html>
