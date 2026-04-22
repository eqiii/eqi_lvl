<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Sensor</title>
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
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: left;
            padding: 12px 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            font-weight: bold;
        }
    </style>
</head>

<body> <!-- Navbar -->
    <div class="navbar"> <a href="#">Sensor</a> <a href="#">Home</a> <a href="{{ route('device.index') }}">Device</a> </div> <!-- Content -->
    <div class="container">
        <div class="header">
            <h1>Data Sensor</h1> <a href="{{ route('sensor.create') }}" class="btn">Tambah Data Sensor</a>

        </div>
        <table>
            <thead>
                <tr>
                    <th>Nama sensor</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sensors as $sensor)
                    <tr>
                        <td>{{ $sensor->nama_sensor }}</td>
                        <td>{{ $sensor->data_sensor }}</td>
                        <td>
                            <a href="{{ route('sensor.edit', $sensor->id) }}">Edit</a>

                            <form action="{{ route('sensor.destroy', $sensor->id) }}" method="POST"
                                style="display:inline">
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
