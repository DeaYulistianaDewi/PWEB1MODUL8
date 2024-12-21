<?php
$host = 'localhost';
$db = 'tracer_alumni';
$user = 'root';
$pass = '';

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action === 'get') {
    $result = $conn->query("SELECT * FROM alumni ORDER BY created_at DESC");
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} elseif ($action === 'add') {
    $name = $_POST['name'];
    $graduation_year = $_POST['graduation_year'];
    $job = $_POST['job'];

    $stmt = $conn->prepare("INSERT INTO alumni (name, graduation_year, job) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $name, $graduation_year, $job);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}
?>
