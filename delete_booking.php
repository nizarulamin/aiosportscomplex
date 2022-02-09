<?php
include_once 'config.php';

if (isset($_GET['delete'])) {
    $booking_id = $_GET['delete'];
    $sql = "DELETE FROM booking WHERE booking_id ='$booking_id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Delete Successful.')</script>";
        header('location: admin_booking.php');
    } else {
        echo "<script>alert('Woops! Something went wrong.')</script>";
    }
    mysqli_close($conn);
}
