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

// Perform the query
$query = "SELECT * FROM contractors";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Page</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: #fff;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        a.btn {
            color: #fff;
        }

        a.btn-pencil {
            background-color: #28a745;
        }

        a.btn-danger {
            background-color: #dc3545;
        }
    </style>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                <div class="text-right">
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <td> User ID </td>
                            <td> User Name </td>
                            <td> User Price </td>
                            <td> Email </td>
                            <td> Phone </td>
                            <td> Service  </td>
                            <td> Property Type </td>
                            <td> Message </td>
                            <td> Image </td>
                            <td> Edit  </td>
                            <td> Delete </td>
                            <td> Accept </td>
                        </tr>

                        <?php 
                        while($row = mysqli_fetch_assoc($result)) {
                            $UserID = $row['id'];
                            $UserName = $row['name'];
                            $UserPrice = $row['price'];
                            $UserEmail = $row['email'];
                            $UserPhone = $row['phone'];
                            $UserService = $row['service'];
                            $UserProperty = $row['property_type'];
                            $UserMessage = $row['message'];
                            $Userimage = $row['image'];
                            ?>
                            <tr>
                                <td><?php echo $UserID ?></td>
                                <td><?php echo $UserName ?></td>
                                <td><?php echo $UserPrice ?></td>
                                <td><?php echo $UserEmail ?></td>
                                <td><?php echo $UserPhone ?></td>
                                <td><?php echo $UserService ?></td>
                                <td><?php echo $UserProperty ?></td>
                                <td><?php echo $UserMessage ?></td>
                                <td><img src="<?php echo $Userimage?>" width=200 alt="User Image" class="user-image"></td>
                                <td><a href="edit.php?id=<?php echo $UserID; ?>" class="btn btn-pencil">Edit</a></td>
                                <td><a href="delete.php?id=<?php echo $UserID; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
                                <td><a href="accept.php?id=<?php echo $UserID; ?>" class="btn btn-success">Accept</a></td>
                            </tr>        
                            <?php 
                        }  
                        mysqli_close($conn); // Close the database connection
                        ?>                                                                    

                    </table>
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>
