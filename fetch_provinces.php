<?php
include_once 'includes/config.php';

if (isset($_POST['region_id'])) {
    $region_id = $_POST['region_id'];

    // Debugging: Print received region_id
    error_log("Received region_id: " . $region_id);
    
    $query = "SELECT prv_code, name FROM provinces WHERE reg_code = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$region_id]);
    $provinces = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($provinces) {
        
        foreach ($provinces as $province) {
            echo '<option value="' . htmlspecialchars($province['prv_code']) . '">' . htmlspecialchars($province['name']) . '</option>';
        }
    } else {
        echo '<option value="">No provinces available</option>';
    }
} else {
    echo '<option value="">Error: No region selected</option>';
}
?>
