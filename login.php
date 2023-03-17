<?php
error_reporting(0);
$registernumber = $_POST['registernumber'];
$password = $_POST['password'];

$con = new mysqli('localhost', 'root', '', 'creslms');
if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
} else {
    $stmt = $con->prepare("select * from student where registernumber = ?");
    $stmt->bind_param("i", $registernumber);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
   

    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {

            header("Location:studentfrontpage.php?user_id=" . $data['id'] . "&department=" . $data['department'] . "&semester=" . $data['semester']);
           



        } else {

            echo "<script type='text/javascript'>alert('invalid password');</script>";
        }

    }
    
}
if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
} else {
    $stmt = $con->prepare("select * from faculty where registernumber = ?");
    $stmt->bind_param("i", $registernumber);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {

            header("Location: faculty_dashboard.php");
            

        } else {

            echo "<script type='text/javascript'>alert('invalid password');</script>";

        }

    }

}
if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
} else {
    $stmt = $con->prepare("select * from superadmin where registernumber = ?");
    $stmt->bind_param("i", $registernumber);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {

            header("Location: superadmin.php?user_id=" . $data['id']."");

        } else {

            echo "<script type='text/javascript'>alert('invalid password');</script>";

        }

    }

}
if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
} else {
    $stmt = $con->prepare("select * from admin where registernumber = ?");
    $stmt->bind_param("i", $registernumber);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {

            header("Location: admin_frontpage.php?user_id=" . $data['id']);

        } else {

            echo "<script type='text/javascript'>alert('invalid password');</script>";

        }


    } else {

        echo "<script type='text/javascript'>alert('invalid password');</script>";

    }
 
}
