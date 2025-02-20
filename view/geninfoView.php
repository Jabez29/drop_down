<?php
// Include config with the correct path
include_once __DIR__ . '/../includes/config.php';

// Fetch regions using PDO
$query = "SELECT reg_code, name FROM regions";
$stmt = $pdo->query($query);
$regions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #1d8348; width: 100%;">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center text-white" href="#">
            <img src="Assets/icon/actscc_logo.png" width="50" height="50" class="d-inline-block align-top" alt="Logo" style="margin-right: 10px;">
            <span id="alumniText" class="ml-2" style="font-family: 'Arial', sans-serif; font-weight: bold; color: white; margin-left: 10px;">
                ACTS COMPUTER COLLEGE
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="../caps/landingpage.php">HOME</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">ACADEMICS</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">ALUMNI</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Profile</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="p-4 border rounded shadow-sm bg-white">
    <div class="block-heading text-center">
        <h2 class="text-info">Graduate Tracer Survey</h2>
    </div>

    <h3 class="mb-4">A. General Information</h3>

    <form action="http://localhost/Caps/validate/info.php" method="POST" id="userForm">
        <div class="form-group">
            <label>Student No.</label>
            <input type="text" name="student_number" required>
        </div>

        <div class="form-group row">
            <div class="col-md-4">
                <label>Last Name</label>
                <input type="text" name="last_name" required>
            </div>
            <div class="col-md-4">
                <label>First Name</label>
                <input type="text" name="first_name" required>
            </div>
            <div class="col-md-4">
                <label>Middle Name</label>
                <input type="text" name="middle_name">
            </div>
        </div>

        <label for="address">Permanent Address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="mobile">Mobile No.:</label>
        <input type="text" id="mobile" name="mobile"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="civilstatus">Civil Status:</label>
<select id="civilstatus" name="civilstatus" required>
    <option value="" selected disabled>Select Civil Status</option>
    <option value="Single">Single</option>
    <option value="Married">Married</option>
</select>
<br><br>

<label for="gender">Gender:</label>
<select id="gender" name="gender" required>
    <option value="" selected disabled>Select Gender</option>
    <option value="M">Male</option>
    <option value="F">Female</option>
</select>
<br><br>

        <label for="region">Region:</label>
        <select id="region" name="region_id" required>
            <option value="">Select Region</option>
            <?php foreach ($regions as $row) { ?>
                <option value="<?php echo htmlspecialchars($row['reg_code']); ?>">
                    <?php echo htmlspecialchars($row['name']); ?>
                </option>
            <?php } ?>
        </select><br><br>

        <label for="province">Province:</label>
        <select id="province" name="province_id" required disabled>
            <option value="">Select Province</option>
        </select><br><br>

        <label for="municipality">Municipality:</label>
        <select id="municipality" name="mun_code" required disabled>
            <option value="">Select Municipality</option>
        </select><br><br>

        <label for="barangay">Barangay:</label>
        <select id="barangay" name="bgy_code" required disabled>
            <option value="">Select Barangay</option>
        </select><br><br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#region').change(function() {
        var region_id = $(this).val();

        // Reset province, municipality, and barangay when region changes
        $('#province').prop('disabled', true).html('<option value="">Select Province</option>');
        $('#municipality').prop('disabled', true).html('<option value="">Select Municipality</option>');
        $('#barangay').prop('disabled', true).html('<option value="">Select Barangay</option>');

        if (region_id) {
            $.post('fetch_provinces.php', { region_id: region_id }, function(data) {
                $('#province').prop('disabled', false).html('<option value="">Select Province</option>' + data);
            }).fail(function(xhr, status, error) {
                console.error("Error fetching provinces:", error);
            });
        }
    });

    $('#province').change(function() {
        var province_id = $(this).val();

        // Reset municipality and barangay when province changes
        $('#municipality').prop('disabled', true).html('<option value="">Select Municipality</option>');
        $('#barangay').prop('disabled', true).html('<option value="">Select Barangay</option>');

        if (province_id) {
            $.post('fetch_municipalities.php', { province_id: province_id }, function(data) {
                $('#municipality').prop('disabled', false).html('<option value="">Select Municipality</option>' + data);
            }).fail(function(xhr, status, error) {
                console.error("Error fetching municipalities:", error);
            });
        }
    });

    $('#municipality').change(function() {
        var mun_code = $(this).val();

        // Reset barangay when municipality changes
        $('#barangay').prop('disabled', true).html('<option value="">Select Barangay</option>');

        if (mun_code) {
            $.ajax({
                url: 'fetch_barangays.php',
                type: 'POST',
                data: { mun_code: mun_code }, 
                dataType: 'json',
                success: function(response) {
                    if (Array.isArray(response) && response.length > 0) {
                        $('#barangay').prop('disabled', false).html('<option value="">Select Barangay</option>');
                        $.each(response, function(index, barangay) {
                            $('#barangay').append('<option value="' + barangay.bgy_code + '">' + barangay.name + '</option>');
                        });
                    } else {
                        $('#barangay').prop('disabled', true).html('<option value="">No Barangay Available</option>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching barangays:", error);
                }
            });
        }
    });
});

</script>
