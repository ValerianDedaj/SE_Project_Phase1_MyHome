<?php
// Establish the database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myhome_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record to be edited
    $query = "SELECT * FROM contractors WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $UserName = $row['name'];
        $UserPrice = $row['price'];
        $UserEmail = $row['email'];
        $UserPhone = $row['phone'];
        $UserService = $row['service'];
        $UserProperty = $row['property_type'];
        $UserMessage = $row['message'];
    } else {
        echo "Record not found!";
        exit();
    }
} else {
    echo "Invalid request!";
    exit();
}

// Handle form submission
if(isset($_POST['submit'])) {
    $UserName = mysqli_real_escape_string($conn, $_POST['name']);
    $UserPrice = mysqli_real_escape_string($conn, $_POST['price']);
    $UserEmail = mysqli_real_escape_string($conn, $_POST['email']);
    $UserPhone = mysqli_real_escape_string($conn, $_POST['phone']);
    $UserService = mysqli_real_escape_string($conn, $_POST['service']);
    $UserProperty = mysqli_real_escape_string($conn, $_POST['property_type']);
    $UserMessage = mysqli_real_escape_string($conn, $_POST['message']);

    // Update the record in the database
    $updateQuery = "UPDATE contractors SET 
                    name = '$UserName',
                    price = '$UserPrice',
                    email = '$UserEmail',
                    phone = '$UserPhone',
                    service = '$UserService',
                    property_type = '$UserProperty',
                    message = '$UserMessage'
                    WHERE id = $id";

    if(mysqli_query($conn, $updateQuery)) {
        header("Location: admin_area.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343a40;
            color: #fff;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            color: #fff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-success {
            background-color: #28a745;
        }
    </style>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <h2 class="text-center mb-4">Edit</h2>

                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $UserName; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="price">User Price</label>
                            <input type="text" class="form-control" id="price" name="price" value="<?php echo $UserPrice; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $UserEmail; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $UserPhone; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="service">Service</label>
                            <input type="text" class="form-control" id="service" name="service" value="<?php echo $UserService; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="property_type">Property Type</label>
                            <input type="text" class="form-control" id="property_type" name="property_type" value="<?php echo $UserProperty; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required><?php echo $UserMessage; ?></textarea>
                        </div>

                        <button type="submit" name="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>