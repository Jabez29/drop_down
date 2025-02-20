<?php
// Database connection
include '../includes/config.php';

try {
    // Fetch form data
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $student_number = $_POST['student_number'];
    $course = $_POST['course'];
    $graduation_year = $_POST['graduation_year'];
    $email = $_POST['email'];

    echo "Debug - Email received: " . $email . "<br>"; // Debugging

    // Check if the graduate exists
    $sql = "SELECT * FROM graduates WHERE student_number = ? AND last_name = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$student_number, $last_name]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // Debugging: Check if email is fetched
        echo "Debug - Fetched email: " . $result['email'] . "<br>"; 
        exit;

        // Redirect with email
        $query_params = http_build_query([
            'first_name' => $result['first_name'],
            'middle_name' => $result['middle_name'],
            'last_name' => $result['last_name'],
            'student_number' => $result['student_number'],
            'email' => $result['email'], // ✅ Ensure email is passed
            'success' => 'true'
        ]);

        echo "<script>
                alert('Verification successful! Redirecting to the Graduate Tracer Survey.');
                window.location.href = '../geninfo.php?$query_params';
              </script>";
        exit;
    } else {
        // Insert a new graduate
        $insert_sql = "INSERT INTO graduates (first_name, middle_name, last_name, student_number, course, graduation_year, email) 
                       VALUES (?, ?, ?, ?, ?, ?, ?)";
        $insert_stmt = $pdo->prepare($insert_sql);
        $insert_stmt->execute([$first_name, $middle_name, $last_name, $student_number, $course, $graduation_year, $email]);

        if ($insert_stmt->rowCount() > 0) {
            echo "<script>
                    alert('Graduate added successfully!');
                    window.location.href='../geninfo.php?first_name=$first_name&middle_name=$middle_name&last_name=$last_name&student_number=$student_number&email=$email';
                  </script>";
            exit;
        } else {
            echo "<script>
                    alert('Error adding graduate to the database.');
                    window.location.href='../index.php';
                  </script>";
            exit;
        }
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>