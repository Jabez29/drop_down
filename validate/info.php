//<?php
include '../includes/config.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type'];
    $parent_id = isset($_POST['parent_id']) ? $_POST['parent_id'] : null;

    try {
        switch ($type) {
            case 'region':
                $query = "SELECT id, name FROM regions";
                break;
            case 'province':
                $query = "SELECT id, name FROM provinces WHERE region_id = :parent_id";
                break;
            case 'city':
                $query = "SELECT id, name FROM cities WHERE province_id = :parent_id";
                break;
            case 'barangay':
                $query = "SELECT id, name FROM barangays WHERE city_id = :parent_id";
                break;
            default:
                echo json_encode(['success' => false, 'message' => 'Invalid type']);
                exit;
        }

        $stmt = $pdo->prepare($query);
        if ($parent_id) {
            $stmt->bindParam(':parent_id', $parent_id, PDO::PARAM_INT);
        }
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode(['success' => true, 'list' => $result]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}
?>
//