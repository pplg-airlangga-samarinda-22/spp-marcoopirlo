<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_spp";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        throw new Exception("Koneksi gagal: " . $conn->connect_error);
    }
} catch (Exception $e) {
    die($e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]); // Hapus spasi
    $password = trim($_POST["password"]); // Hapus spasi

    $stmt = $conn->prepare("SELECT * FROM petugas WHERE LOWER(username) = LOWER(?)"); // Case-insensitive
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("s", $username); // Tidak perlu strtolower() lagi karena sudah di query
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) { // Pastikan kolom 'password' benar
            $_SESSION["username"] = $username;
            header("Location: admin.php");
            exit();
        } else {
            echo "Username atau password salah.";
        }
    } else {
        echo "Username atau password salah.";
    }

    $stmt->close();
}

$conn->close();
?>