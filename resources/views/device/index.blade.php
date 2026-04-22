<!DOCTYPE html>
<html lang="id">

<head>
<meta charset="UTF-8">
<title>Device</title>

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
  padding: 30px 40px;
  background-color: #ffffff;
  margin: 20px;
  border-radius: 8px;
}

/* Header */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 25px;
}

.header h1 {
  margin: 0;
  font-size: 32px;
}

.btn {
  background-color: #0d6efd;
  color: white;
  padding: 10px 16px;
  border-radius: 6px;
  text-decoration: none;
  font-size: 14px;
  border: none;
  cursor: pointer;
}

/* Table */
table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  text-align: left;
  padding: 12px 8px;
  border-bottom: 1px solid #ddd;
}

input {
  padding: 6px;
  margin: 4px 0;
}
</style>

</head>

<body>

<!-- Navbar -->
<div class="navbar">
  <a href="#">Sensor</a>
  <a href="{{ route('sensor.index') }}">Home</a>
  <a href="{{ route('device.index') }}">Device</a>
</div>

<!-- Content -->
<div class="container">

<div class="header">
  <h1>Data Device</h1>
</div>

<!-- FORM TAMBAH -->
<form method="POST" action="{{ route('device.store') }}">
@csrf

<input type="text" name="serial_number" placeholder="Serial Number" required>
<input type="text" name="topik" placeholder="Topik" required>
<input type="datetime-local" name="time">

<button class="btn">Tambah Device</button>
</form>

<br>

<!-- TABLE -->
<table>
<thead>
<tr>
<th>ID</th>
<th>Serial Number</th>
<th>Topik</th>
<th>Time</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>
@foreach($devices as $device)
<tr>

<td>{{ $device->id }}</td>
<td>{{ $device->serial_number }}</td>
<td>{{ $device->topik }}</td>
<td>{{ $device->time }}</td>

<td>

<!-- EDIT -->
<a href="{{ route('device.edit', $device->id) }}">
  <button type="button">Edit</button>
</a>

<!-- DELETE -->
<form method="POST" action="{{ route('device.destroy', $device->id) }}" style="display:inline;">
@csrf
@method('DELETE')
<button type="submit">Hapus</button>
</form>

</td>

</tr>
@endforeach
</tbody>

</table>

</div>

</body>
</html>
