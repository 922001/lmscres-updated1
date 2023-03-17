<?php
echo "Update subject";
$conn = mysqli_connect("localhost","root","","creslms");
$courseCode = $_POST['courseCode'];

$update_sql = " SELECT * from subject WHERE course_code = '$courseCode'";
$query_run = mysqli_query($conn,$update_sql);

if(mysqli_num_rows($query_run)>0)
{
    echo "record found";
    $department = $_POST['department'];
$subject_name = $_POST['subject'];
$semester = $_POST['semester'];
$session = $_POST['session'];
$video = $_POST['video'];
$flipbook = $_POST['flipbook'];
$assessment = $_POST['assessment'];

     $sql = "UPDATE `subject` SET `name`='$subject_name',`semester`='$semester',`department`='$department',`session`='$session',`video_content`='$video',`flip_book`='$flipbook',`assessment`='$assessment' WHERE course_code = '$courseCode'";
     
     if (mysqli_query($conn, $sql)) {
        echo "Updated record successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
}
else{ 
    echo "no record found ";

}
 $conn->close();
?>
