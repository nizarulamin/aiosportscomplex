<?php 
    
    include "config.php";

    
    if (isset($_POST['update'])) 
    {
        $update_status = $_POST['update_status'];

        if ($update_status == 'Pending')
          $book_status = 0;
        else if ($update_status == 'Booked')
          $book_status = 1;
        else if ($update_status == 'Paid')
          $book_status = 2;
        else if ($update_status == 'Cancelled')
          $book_status = 3;

        $sql = "UPDATE APPOINTMENT SET `App_Date`='$App_Date',`App_Type`='$App_Type',`Location_Name`='$Location_Name' WHERE `App_ID`='$App_ID'"; 

        $result = mysqli_query($db, $sql);

        header('location: ViewAppointmentAdmin.php');

    } 

    if (isset($_GET['update'])) 
    {
        $App_ID = $_GET['edit']; 

        $sql = "SELECT * FROM APPOINTMENT WHERE App_ID  ='$App_ID'";

        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) 
        {        
            while ($row = mysqli_fetch_assoc($result))
            {

                $App_ID = $row['App_ID'];

                $App_Date = $row['App_Date'];

                $App_Type = $row['App_Type'];

                $Location_Name  = $row['Location_Name'];
            } 

?>