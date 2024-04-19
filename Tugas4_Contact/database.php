
<?php
$host = 'localhost';
$username = 'u222410101047';
$password = '';
$database = 'tb_bullsaranghae';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Koneksi database gagal'.$conn->connect_error);
}
?>

<?php
// database.php
$servername = "your_servername";
$username = "u222410101047";
$password = "";
$dbname = "tb_bullsaranghae";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
