<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["data"];
    $data = explode(" ", $input);

    if (count($data) >= 3) {
        $nama = $data[0];
        $usia = $data[1];
        $kota = $data[2];

        // Koneksi ke database MySQL (ganti dengan informasi koneksi Anda)
        $host = "localhost";
        $username = "root";
        $password = ""; 
        $database = "data_warga";

        // Membuat koneksi ke database
        $koneksi = new mysqli($host, $username, $password, $database);

        if ($koneksi->connect_error) {
            die("Koneksi database gagal: " . $koneksi->connect_error);
        }

        // Menyimpan data ke database
        $sql = "INSERT INTO data_warga (NAME, AGE, CITY, CREATED_AT) VALUES (?, ?, ?, NOW())";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("sss", $nama, $usia, $kota);
        
        if ($stmt->execute()) {
            echo "Data berhasil disimpan ke database.\n";
        } else {
            echo "Error: " . $stmt->error . "\n";
        }

        // Tutup koneksi database
        $stmt->close();
        $koneksi->close();
    } else {
        echo "Format input tidak sesuai. Gunakan format: NAMA USIA KOTA\n";
    }
}
?>
