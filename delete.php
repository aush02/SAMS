<?php
include 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM student WHERE id='$id'";
    $data = mysqli_query($connect, $query);

    if ($data) {
        echo "Delete successful";?>
        <script>
        window.location="http://localhost/SAMS/0.2/display.php","_self";
        </script>
        <?php
    } else {
        echo "Delete failed: " . mysqli_error($connect);
    }
} else {
    echo "Student ID (sn) not provided in the URL.";
}
?>
