<?php
include_once 'includes/config.php';

if (isset($_POST['province_id'])) {
    $province_id = $_POST['province_id'];

    // Debugging: Check if province_id is received
    error_log("Received province_id: " . $province_id);

    // Correct SQL query
    $query = "SELECT mun_code, name FROM municipalities WHERE prv_code = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$province_id]);
    $cities = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($cities) {
        foreach ($cities as $municipality) {
            echo '<option value="' . htmlspecialchars($municipality['mun_code']) . '">' . htmlspecialchars($municipality['name']) . '</option>';
        }
    } else {
        echo '<option value="">No Municipality found</option>';
    }
} else {
    echo '<option value="">Error: No province selected</option>';
}
?>
