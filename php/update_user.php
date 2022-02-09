<?php 
include "config.php";
    if (isset($_POST['update'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $telnum = $_POST['telnum']; 
        $sql = "UPDATE `users` SET `firstname`='$username',`lastname`='$email',`email`='$telnum',`password`='$password', WHERE `id`='$user_id'"; 
        $result = $conn->query($sql); 

        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 

if (isset($_GET['id'])) {
    $user_id = $_GET['id']; 
    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";
    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $username = $row['username'];
            $email = $row['email'];
            $password  = $row['password'];
            $telnum = $row['telnum'];
            $id = $row['id'];
        } 

    ?>
        <h2>User Update Form</h2>
        <form action="" method="post">
          <fieldset>
            <legend>Personal information:</legend>
            
            Username:<br>
            <input type="text" name="username" value="<?php echo $username; ?>">
            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
            <br>

            Email:<br>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <br>

            Phone Number:<br>
            <input type="number" name="telnum" value="<?php echo $telnum; ?>">
            <br>

            Password:<br>
            <input type="password" name="password" value="<?php echo $password; ?>">
            <br><br>

            <input type="submit" value="Update" name="update">
          </fieldset>
        </form> 
        </body>
        </html> 
    <?php

    } else{ 
        header('Location: view_user.php');
    } 
}
?> 