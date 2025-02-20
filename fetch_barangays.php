<?php
include_once 'includes/config.php'; // ✅ Corrected

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST['mun_code']) || empty(trim($_POST['mun_code']))) {
        echo json_encode(['error' => 'No mun_code received']);
        exit;
    }

    $mun_code = trim($_POST['mun_code']); // Sanitize input

    // Debugging: Log received data
    file_put_contents("debug_log.txt", "Received mun_code: " . $mun_code . "\n", FILE_APPEND);

    try {
        $query = "SELECT bgy_code, name FROM barangays WHERE mun_code = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$mun_code]);
        $barangays = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Debugging: Log fetched data
        file_put_contents("debug_log.txt", "Fetched Data: " . json_encode($barangays) . "\n", FILE_APPEND);

        echo json_encode($barangays);
    } catch (PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Invalid request method']);
}
?>
