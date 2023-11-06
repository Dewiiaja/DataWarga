<!DOCTYPE html>
<html>
<head>
    <title>Input Data Pengguna</title>
    <style>
                    /* Style untuk body */
            body {
                font-family: Arial, sans-serif;
                background-color: rgb(234, 170, 170);
                margin: 0;
                padding: 0;
                text-align: center;
            }

            /* Style untuk judul halaman */
            h1 {
                background-color: #fff;
                color: #edbdbd;
                padding: 10px;
            }

            /* Style untuk form input */
            form {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                width: 300px;
                margin: 0 auto;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }

            /* Style untuk label input */
            label {
                display: block;
                margin-bottom: 10px;
            }

            /* Style untuk input teks */
            input[type="text"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            /* Style untuk tombol submit */
            input[type="submit"] {
                background-color: #f0f0f0;
                color: #d3a9a9;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            /* Style untuk tombol submit saat dihover */
            input[type="submit"]:hover {
                background-color: #f0f0f0;
            }
    </style>
</head>
<body>
    <h1>Input Data Pengguna</h1>

    <form method="post" action="simpan.php">
        <label for="data">Masukkan NAMA USIA KOTA 
            <br> (Dewi 17 Malang):</label>
        <input type="text" name="data" id="data" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
<table border="2">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Usia</th>
            <th>Kota</th>
            <th>Tanggal Submit</th>
        </tr>
        <?php
        $mysqli = new mysqli('localhost', 'root', '', 'data_warga');
        $query = "SELECT * FROM data_warga";
        $result = $mysqli->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data tersedia.</td></tr>";
        }
        $mysqli->close();
        ?>
    </table>
</html>
